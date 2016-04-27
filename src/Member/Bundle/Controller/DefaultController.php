<?php

namespace Member\Bundle\Controller;

use Member\Bundle\Entity\SymMember;
use Member\Bundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $is_login = $session->get('loginAdmin');
        if($is_login) return $this->forward('MemberBundle:Default:admin');
        return $this->render('MemberBundle:Default:index.html.twig');
    }


    /**
     * 用户登录
     * @return Response
     */
    public function loginAction(Request $request)
    {
        $mobile = $request->get('mobile');
        $pwd  = $request->get('password');
        $session = $request->getSession();
        $is_login = $session->get('loginAdmin');
        if($is_login) return $this->forward('MemberBundle:Default:admin');
        $em       = $this->getDoctrine()->getManager();
        $has      = $em->getRepository('MemberBundle:SymMember')->findOneBy(['mobile' => $mobile, 'password' => md5($pwd)]);
        if(!$has)
        {
            return new Response("<script> alert('用户不存在');window.location.href='/member'; </script>");
        }
        //跳转到list
        $session->set('loginAdmin', $mobile);
        return $this->forward('MemberBundle:Default:admin');
    }

    public function logoutAction(Request $request)
    {
        $session = $request->getSession();
        $session->clear();
        return $this->forward('MemberBundle:Default:index');
    }

    /**
     * 主管理界面
     * @return Response
     */
    public function adminAction(Request $request)
    {
        $session = $request->getSession();
        $is_login = $session->get('loginAdmin');
        return $this->render('MemberBundle:Default:parent.html.twig',['login_admin'=> $is_login]);
    }

    /**
     * 增加用户
     */
    public function addAction(Request $request)
    {
        //表单数据获取 和表单数据验证方式没来得及学习，目前先将数据插入。
        $task = new Task();
        $form = $this->createFormBuilder($task)
            ->add('username')
            ->add('password')
            ->add('mobile')
            ->add('qq')
            ->add('email')
            ->getForm();
        if($request->getMethod() == "POST"){
            $form->handleRequest($request);
            if(!$form->isValid()){
                //保持task到数据库
               $username = $request->get('username');
               $password = $request->get('password');
               $email    = $request->get('email');
               $mobile   = $request->get('mobile');
               $qq       = $request->get('qq');
               $verify1  = $this->verifyData('mobile', $mobile);
               if(!$verify1) return new Response("<script> alert('手机号格式不正确');window.location.href='/member/add'; </script>");
               $verify2  = $this->verifyData('email', $email);
               if(!$verify2) return new Response("<script> alert('邮箱格式不正确');window.location.href='/member/add'; </script>");
               $em       = $this->getDoctrine()->getManager();
               $has      = $em->getRepository('MemberBundle:SymMember')->findOneBy(['mobile' => $mobile]);
               if($has)
               {
                   return new Response("<script> alert('手机号已经存在');window.location.href='/member/add'; </script>");
               }
               $member   = new SymMember();
               $member->setUsername($username)
                        ->setPassword(md5($password))
                        ->setEmail($email)
                        ->setMobile($mobile)
                        ->setQq($qq);

                        $em->persist($member);
                        $em->flush();
                return $this->redirect('list');
            }
        }
        return $this->render('MemberBundle:Member:add.html.twig',array(
            'form' =>$form->createView(),
        ));
    }

    /**
     * 编辑用户
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $member = $em->getRepository('MemberBundle:SymMember')->find($id);

        if (!$member) {
            throw $this->createNotFoundException('No Member found for id '.$id);
        }
        $task = new Task();
        $form = $this->createFormBuilder($task)
            ->add('username')
            ->add('password')
            ->add('qq')
            ->add('email')
            ->getForm();
        if($request->getMethod() == "POST"){
            $form->handleRequest($request);
            if(!$form->isValid()){
                //保持task到数据库
                $username = $request->get('username');
                $email = $request->get('email');
                $qq = $request->get('qq');
                $verify2  = $this->verifyData('email', $email);
                if(!$verify2) return new Response("<script> alert('邮箱格式不正确');window.location.href='/member/add'; </script>");

                $member->setUsername($username)
                    ->setEmail($email)
                    ->setQq($qq);
                $em->flush();
            }
           //跳转到list
            return $this->forward('MemberBundle:Default:list');
        }
        return $this->render('MemberBundle:Member:edit.html.twig', [
            'member' => $member
        ]);
    }

    /**
     * 用户列表
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('MemberBundle:SymMember');
        $data = $repository->findAll();
        return $this->render('MemberBundle:Member:index.html.twig', [
            'data' => $data
        ]);
    }

    private function verifyData($type, $params)
    {
        if($type == 'mobile') $preg = '/^1[34578]\d{9}$/';
        if($type == 'email') $preg = '/^[\w\-\.]+@[\w\-]+(\.\w+)+$/';
        return preg_match($preg, $params) ? true : false;
    }
}
