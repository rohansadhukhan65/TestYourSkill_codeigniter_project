<?php



class Online_exam extends CI_Controller
{



    //! this is for home page
    function home()
    {
        $this->load->view('home');
    }


    //! this for about page
    function about()
    {
        $this->load->view('about');
    }


    //! this for contact page
    function contact()
    {
        unset($_SESSION['msg']);
        $this->load->view('contact');
        if ($this->input->post('submit')) {
            $_SESSION['msg'] = "Your request has been submitted.We will contact you soon";  // this msg show after contact form submission
            $student_name = $this->input->post('student_name');
            $student_email = $this->input->post('email');
            $student_phone = $this->input->post('phone');
            $student_query = $this->input->post('query');
            if ($this->Exam_model->student_query_model($student_name, $student_email, $student_phone, $student_query)) {
                redirect('Online_exam/query_msg');
            }
        }
    }
    function query_msg()
    {
        $this->load->view('contact');
    }


    //! this for feedback page
    function feedback()
    {
        unset($_SESSION['msg']);
        $this->load->view('feedback');
        if ($this->input->post('submit')) {
            $_SESSION['msg'] = "Your response has been submitted";  // this msg show after contact form submission
            $student_name = $this->input->post('student_name');
            $student_email = $this->input->post('email');
            $feedback = $this->input->post('experience');
            if ($this->Exam_model->student_feedback_model($student_name, $student_email, $feedback)) {
                redirect('Online_exam/feed_msg');
            }
        }
    }
    function feed_msg()
    {
        $this->load->view('feedback');
    }


    //! if admin do logout then it rturns to admin login page 
    function admin_logout()
    {
        $this->load->view('admin_login');
    }



    //! this for student login page
    function studentlog()
    {
        $this->load->view('student_login');
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
    function student_test()
    {
        $this->load->view('testpage');
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
                $this->load->view("student_login");
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
        $this->load->view('student_login');
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
        $this->load->view('student_login');
    }



    //! this is a text menu page where we can see different kinds of test
    function test()
    {
        $this->load->view('testpage');
    }


    //! this for general apptitude test which will show all topic of different subject of general apptitude test 
    function arithematic_aptitude()
    {
        $this->load->view('arithematic');
    }



    //! this for data interpretation test which will show all topic of different subject of data interpretation  test 
    function simple_math()
    {
        $this->load->view('math');
    }




    //! this for online aptitude test which will show all topic of different subject of aptitude  test 
    function online_aptitude()
    {
        $this->load->view('aptitude');
    }




    //! this for verval ability test which will show all topic of different subject of ability  test 
    function verbal_ability()
    {
        $this->load->view('verbal');
    }





    //! this for  reasoning test which will show all topic of different subject of reasoning  test 
    function logical_reasoning()
    {
        $this->load->view('logical');
    }




    //! this for non verbal reasoning test which will show all topic of different subject of non verbal reasoning  test 
    function non_verbal_reasoning()
    {
        $this->load->view('nonverbal');
    }




    //! this for non general knowledge test which will show all topic of different subject of general knowledge  test 
    function basic_general_knowledge()
    {
        $this->load->view('generalknowledge');
    }



    //! this for non general science test which will show all topic of different subject of general science  test
    function general_science()
    {
        $this->load->view('generalscience');
    }



    //! this for non general science test which will show all topic of different subject of general science  test
    function current_affairs()
    {
        $this->load->view('currentaffairs');
    }


    //! this for java test.there is 3 part and when click on that exam page open directly
    function java_mcq_test1()
    {
        $this->load->view('mcqset1');
    }
    function java_mcq_test2()
    {
        $this->load->view('mcqset2');
    }
    function java_mcq_test3()
    {
        $this->load->view('mcqset3');
    }




    //! this for c test.there is 3 part and when click on that exam page open directly
    function c_mcq_test1()
    {
        $this->load->view('cmcqset1');
    }
    function c_mcq_test2()
    {
        $this->load->view('cmcqset2');
    }
    function c_mcq_test3()
    {
        $this->load->view('cmcqset3');
    }



    //! this for php test.there is 3 part and when click on that exam page open directly
    function php_mcq_test1()
    {
        $this->load->view('phpmcqset1');
    }
    function php_mcq_test2()
    {
        $this->load->view('phpmcqset2');
    }
    function php_mcq_test3()
    {
        $this->load->view('phpmcqset3');
    }




    function start_button_page()
    {
        $_SESSION['topic_name'] = $this->input->get('topic'); // we take the topic name according that we load the page when user start exam
        $this->load->view('start_page_for_all');  // start exam page of that, below two is same as it
    }



    //! here user can give exam
    function start_exam()
    {
        if (isset($_SESSION['student_email'])) {
            unset($_SESSION['msg']);
            $result = $this->Exam_model->student_name_fetch($_SESSION['student_email']);
            foreach ($result as $row) {
                $_SESSION['std_name'] = $row->name;
            }
            $question['ques'] = $this->Exam_model->question_fetch($_SESSION['topic_name']);
            $this->load->view('start_exam_page', $question);
        } else {
            $_SESSION['msg'] = "You have to login first for taking the exam ";
            $this->load->view('start_exam_page');
        }
    }

    //! this will calculate results of student
    function exam_result()
    {

        if ($this->input->post('submit')) {
            if (!empty($this->input->post('q'))) {
                $_SESSION['msg'] = "You"; // we kept it so that we can understand that student select any option or not
                $right = 0;
                $wrong = 0;
                $count = count($this->input->post('q'));
                $option = $this->input->post('q');
                //print_r($option);
                //radioa button send two value so that we take that value and convert into array so that we can seperately access q_id and ans
                foreach ($option as $row) {
                    $op = explode(',', $row); // converting into array
                    $selected_ans[] = $op[0]; // as above told we select that two value by index into array because there is more than one question
                    $selected_qid[] = $op[1];
                }
                //we now run the for loop till the length of question id or $selected_qid so that we can match selected_ans and answer
                //  from database for that particular question 
                for ($i = 0; $i < count($selected_qid); $i++) {
                    $result = $this->Exam_model->fetch_question_byid($selected_qid[$i]);
                    foreach ($result as $row) {
                        $fetch_ans = $row->answer;
                    }
                    if ($selected_ans[$i] == $fetch_ans) {
                        $right += 1;
                    } else {
                        $wrong += 1;
                    }
                }
                //we put the result of student into database
                $this->Exam_model->save_result_students($_SESSION['std_name'], $_SESSION['topic_name'], $right);


                $std_result['result'] = array("Number of question attempt" => $count, "Number of question correct" => $right, "Number of question incorrect-" => $wrong);
                $this->load->view('student_result', $std_result);


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
            } else {
                unset($_SESSION['msg']);
                $this->load->view('student_result');
            }
        } else {
            echo "not";
        }
    }
}
?>