<?php
    class Online_exam extends CI_Controller
    {


        /* =========================================  ------------- ==================================== */
        /* =========================================  Without Login ==================================== */
        /* =========================================  ------------- ==================================== */

            //! this is for home page
            function index()
            {
                $this->load->view('user/home');
            }


            //! this for about page
            function about()
            {
                $this->load->view('user/about');
            }


            //! this for contact page
            function contact()
            {
                $context = array();
                if ($this->input->post('submit')) {
                    $student_name = $this->input->post('student_name');
                    $student_email = $this->input->post('email');
                    $student_phone = $this->input->post('phone');
                    $student_query = $this->input->post('query');
                    if ($this->Exam_model->student_query_model($student_name, $student_email, $student_phone, $student_query)) 
                    {
                        $context['msg'] = "<b>" .$student_name. "</b> Your request has been submitted. We will contact you soon";  // this msg show after contact form submission
                        $this-> load->view('user/contact', $context);
                    }
                }
                else{
                    $this->load->view('user/contact', $context);

                }
            }



            //! this for feedback page
            function feedback()
            {
                $context = Array();
                if ($this->input->post('submit')) {
                    $student_name = $this->input->post('student_name');
                    $student_email = $this->input->post('email');
                    $feedback = $this->input->post('experience');
                    if ($this->Exam_model->student_feedback_model($student_name, $student_email, $feedback)) 
                    {
                        $context['msg'] = "<b>" . $student_name . "</b> Your response has been submitted";  // this msg show after contact form submission
                        $this-> load->view('user/feedback', $context);
                    }
                }
                else{
                    $this->load->view('user/feedback', $context);

                }

            }
            



        /* =========================================  ----------------- ==================================== */
        /* =========================================  Without Login End ==================================== */
        /* =========================================  ----------------- ==================================== */








        /* ==================== -------------------------------------------- ============================== */
        /* ==================== Student login Sigup logout Related Functions ============================== */
        /* ==================== -------------------------------------------- ============================== */


            //! this for student login page
            function studentlog()
            {
                $this->load->view('user/student_login');
                if ($this->input->post('submit')) {
                    $_SESSION['student_email'] = $this->input->post('email');
                    $student_pass = md5($this->input->post('password'));
                    if ($this->Exam_model->student_log_model($_SESSION['student_email'], $student_pass)) {
                        redirect('Online_exam/student_test');
                    } else {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                            <strong>Error!</strong> Invalid email or password.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                }
            }


            //!this is registration of student
            function student_register()
            {
                if ($this->input->post('submit')) {

                    $student_name = $this->input->post('name');
                    $student_email = $this->input->post('email');
                    $student_pass = md5($this->input->post('pass'));
                    $student_phone = $this->input->post('phone');
                    $date1 = mdate("%Y-%m-%d");

                    if ($this->Exam_model->student_register_model($student_name, $student_email, $student_pass, $student_phone, $date1)) {
                        // this will send the mail automatic to the user who registered
                        $config = array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'ssl://smtp.googlemail.com',
                            'smtp_port' => 465,
                            'smtp_user' => 'testmail.examl@gmail.com',
                            'smtp_pass' => 'arijit2000',
                            'charset' => 'iso-8859-1',
                            'mailtype' => 'html',
                            'wordwrap' => TRUE
                        );
                        $to = $student_email;
                        $sub = "Thank you";
                        $body = "Dear " . $student_name . "," . "<br>" . "<br> Welcome to TestYourSkill.<br>You have registered successfully.<br>Now you can login and take the exam.";
                        $this->load->library('email', $config);
                        $this->email->set_newline("\r\n");
                        $this->email->from('testmail.examl@gmail.com', '');
                        $this->email->to($to);
                        $this->email->subject($sub);
                        $this->email->message($body);
                        $this->email->send();
                        redirect('Online_exam/student_relogin');
                    } else {
                        $this->load->view("user/student_login");
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                            <strong>Error!</strong> This email is already registered.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                <?php

                    }
                }
            }


            //! after register student reffer to relogin
            function student_relogin()
            {
                $this->load->view('user/student_login');
                ?>
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    <strong>Success!</strong> Registered successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }


            function student_logout()
            {
                unset($_SESSION['student_email']);
                $this->load->view('user/student_login');
            }



        /* ==================== ------------------------------------------------ ============================== */
        /* ==================== Student login Sigup logout Related Functions End ============================== */
        /* ==================== ------------------------------------------------ ============================== */







        /*====================================== ----------- =============================================*/
        /*====================================== after login =============================================*/
        /*====================================== ----------- =============================================*/


            /* a page where all tests are listed  */
            function student_test()
            {
                if(!empty($_SESSION['student_email']))
                {
                    $this->load->view('user/testpage');
                }
                else
                {
                    redirect(base_url('index.php/Online_exam/studentlog'));
                }
            }



            /* page before start filling the examination form */
            function start_button_page()
            {
                $_SESSION['topic_name'] = $this->input->get('topic'); // we take the topic name according that we load the page when user start exam
                $_SESSION['q_count'] = $this->Exam_model->questionCount($_SESSION['topic_name']);
                $this->load->view('user/start_page_for_all');  // start exam page of that, below two is same as it
            }



            //! here user can give exam
            function start_exam()
            {
                if (isset($_SESSION['student_email'])) 
                {
                    unset($_SESSION['msg']);
                    $result = $this->Exam_model->student_name_fetch($_SESSION['student_email']);
                    foreach ($result as $row) 
                    {
                        $_SESSION['std_name'] = $row->name;
                    }
                    $question['ques'] = $this->Exam_model->question_fetch($_SESSION['topic_name']);
                    $this->load->view('user/start_exam_page', $question);
                } 
                else 
                {
                    $_SESSION['msg'] = "You have to login first for taking the exam ";
                    $this->load->view('user/start_exam_page');
                }
            }

            //! this will calculate results of student
            function exam_result()
            {

                if ($this->input->post('submit')) 
                {
                    if (!empty($this->input->post('q'))) 
                    {
                        $_SESSION['msg'] = "You"; // we kept it so that we can understand that student select any option or not
                        $right = 0;
                        $wrong = 0;
                        $count = count($this->input->post('q'));
                        $option = $this->input->post('q');
            
                        
                        //radioa button send two value so that we take that value and convert into array so that we can seperately access q_id and ans
                        foreach ($option as $row) 
                        {
                            $op = explode(',', $row); // converting into array
                            $selected_ans[] = $op[0]; // as above told we select that two value by index into array because there is more than one question
                            $selected_qid[] = $op[1];
                        }

                        //we now run the for loop till the length of question id or $selected_qid so that we can match selected_ans and answer
                        //  from database for that particular question 
                        for ($i = 0; $i < count($selected_qid); $i++) 
                        {
                            $result = $this->Exam_model->fetch_question_byid($selected_qid[$i]);
                            foreach ($result as $row) 
                            {
                                $fetch_ans = $row->answer;
                            }
                            if ($selected_ans[$i] == $fetch_ans) 
                            {
                                $right += 1;
                            } 
                            else 
                            {
                                $wrong += 1;
                            }
                        }
                        //we put the result of student into database
                        $this->Exam_model->save_result_students($_SESSION['std_name'], $_SESSION['topic_name'], $right);


                        /* Calling view */
                        $std_result['result'] = array(
                            "<span class='text-info'> Number of question attempt </span>" => "<span class='badge badge-info badge-pill text-light p-2'>".$count."</span>",
                            "<span class='text-success'>Number of question correct </span>" => "<span class='badge badge-success badge-pill text-light p-2'>" . $right . "</span>",
                            "<span class='text-danger'>Number of question incorrect - </span>" => "<span class='badge badge-danger badge-pill text-light p-2'>" . $wrong . "</span>"
                        );
                        $this->load->view('user/student_result', $std_result);


                        // this will send the mail automatic  to the user who take the exam
                        $config = array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'ssl://smtp.googlemail.com',
                            'smtp_port' => 465,
                            'smtp_user' => 'testmail.examl@gmail.com',
                            'smtp_pass' => 'arijit2000',
                            'charset' => 'iso-8859-1',
                            'mailtype' => 'html',
                            'wordwrap' => TRUE
                        );
                        $to = $_SESSION['student_email'];
                        $sub = "Thank you";
                        $body = "Dear " . $_SESSION['std_name'] . "," . "<br>" . "exam taken by you - " . $_SESSION['topic_name'] . "." . "<br>your score is - " . $right . "<br> you attempt " . $count . " out of 10 question.<br>Thank you for visiting us.";
                        $this->load->library('email', $config);
                        $this->email->set_newline("\r\n");
                        $this->email->from('testmail.examl@gmail.com', '');
                        $this->email->to($to);
                        $this->email->subject($sub);
                        $this->email->message($body);
                        $this->email->send();
                    } 
                    else 
                    {
                        unset($_SESSION['msg']);
                        $this->load->view('user/student_result');
                    }
                } 
                else 
                {
                    echo "not";
                }
            }
        /*====================================== --------------- =============================================*/
        /*====================================== after login End =============================================*/
        /*====================================== --------------- =============================================*/


    }
?>