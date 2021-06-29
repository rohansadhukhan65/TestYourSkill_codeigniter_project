<?php
class Online_exam_admin extends CI_Controller
{

     


    //! this for admin login page
    function adminlog()
    {
        $this->load->view('admin/home/admin_login');
        if ($this->input->post('submit')) 
        {
            $_SESSION['admin_email'] = $this->input->post('email');
            $admin_pass = $this->input->post('pass');
            if ($this->Exam_model->admin($_SESSION['admin_email'], $admin_pass)) 
            {
                redirect(base_url('index.php/Online_exam_admin/admin_home'));
            } 
            else 
            {
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

    //! if admin do logout then it rturns to admin login page 
    function admin_logout()
    {
        unset($_SESSION['admin_email']);
        $this->load->view('admin_login');
    }

    //! this  admin homne page that come after login
    function admin_home()
    {
        if(!empty($_SESSION['admin_email']))
        {
            $this->load->view('admin/home/home');
        }
        else
        {
            redirect(base_url('index.php/Online_exam_admin/adminlog'));
        }
    }




/*//! ========================================= ====================== ============================================  */
/*//! ========================================= Admin Add New Question ============================================  */
/*//! ========================================= ====================== ============================================  */

    //! here admin can add question
    function add_question()
    {
        // $this->load->view('admin/add_new_question/add_question_page');

        $context = array();
        if ($this->input->post('submit')) 
        {
            $topic = $this->input->post('topic');
            $question = $this->input->post('ques');
            $correct_ans = $this->input->post('ans');
            $op1 = $this->input->post('op1');
            $op2 = $this->input->post('op2');
            $op3 = $this->input->post('op3');
            $op4 = $this->input->post('op4');

            if ($this->Exam_model->add_question_model($topic, $question, $op1, $op2, $op3, $op4, $correct_ans)) 
            {
                $alrt = '   <div class="alert alert-success text-center" role="alert">
                                <b>Question Uploaded</b> successfully !
                            </div>';
                 $context['alert'] =  $alrt;
                // redirect(base_url() . 'index.php/Online_exam_admin/add_question_show');  //this function will load the add question page again after adding question
            }
        }
        $this->load->view('admin/add_new_question/add_question_page',$context);

    }

/*//! ====================================== ========================== ============================================  */
/*//! ====================================== Admin Add New Question End ============================================  */
/*//! ====================================== ========================== ============================================  */





/*//! ====================================== ====================  ============================================  */
/*//! ====================================== Admin Edit Questions  ============================================  */
/*//! ====================================== ====================  ============================================  */


    //! here admin show list of all question
    function edit_paper()
    {
        $question['data'] = $this->Exam_model->question_details_display();
        // $this->load->view('admin/edit_question/edit_paper_page', $question);
       
        if($this->input->get('alert') == "update"){
        $alrt = '  <div class="text-center alert alert-success alert-dismissible fade show mt-2" role="alert">
                    <strong>success!</strong> Question updated successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        $question['alert'] =  $alrt;
        }
        $this->load->view('admin/edit_question/edit_paper_page', $question);
    }

    //! admin can update question
    function edit_question()
    {
        $id = $this->input->get('id');
        $result['data'] = $this->Exam_model->edit_question_records($id)[0];

        // $this->load->view('admin/edit_question/edit_question_page', $result);
        $this->load->view('admin/edit_question/edit_question_page', $result);


        if ($this->input->post('submit'))
        {
            $topic = $this->input->post('topic');
            $question = $this->input->post('ques');
            $correct_ans = $this->input->post('ans');
            $op1 = $this->input->post('op1');
            $op2 = $this->input->post('op2');
            $op3 = $this->input->post('op3');
            $op4 = $this->input->post('op4');

            if ($this->Exam_model->update_question_model($topic, $question, $op1, $op2, $op3, $op4, $correct_ans, $id)) 
            {
                redirect('Online_exam_admin/edit_paper?alert=update');
            }
        }
    }


    //! admin can delete a particular question
    function delete_question()
    {
        $id = $this->input->get('id');
        if ($this->Exam_model->delete_question_records($id)) 
        {
            redirect(base_url('index.php/Online_exam_admin/edit_paper'));
        } else
        {
            echo "not delete";
        }
    }


/*//! ====================================== ======================== ============================================  */
/*//! ====================================== Admin Edit Questions End ============================================  */
/*//! ====================================== ======================== ============================================  */





/*//! ====================================== ================ ============================================  */
/*//! ====================================== Student  Details ============================================  */
/*//! ====================================== ================ ============================================  */


    //! here admin can see student details
    function student_details()
    {
        $student['data'] = $this->Exam_model->student_details_display();
        // $this->load->view('admin/student_details/student_details_page', $student);
        $this->load->view('admin/student_details/student_details_page', $student);
    }



    //! it show only searched student admin can search student by his/her name
    function student_search()
    {
        if ($this->input->post('submit')) {
            $search_name = $this->input->post('search');
            $std_search['data'] = $this->Exam_model->student_search_model($search_name);
            $this->load->view('admin/student_details/student_details_page', $std_search);
        }
    }



    //! admin can delete a particular student
    function delete_student()
    {
        $id = $this->input->get('id');
        if ($this->Exam_model->delete_student_records($id)) {
            redirect('Online_exam_admin/student_details');
        } else {
            echo "not delete";
        }
    }

    


/*//! ====================================== ==================== ============================================  */
/*//! ====================================== Student  Details End ============================================  */
/*//! ====================================== ==================== ============================================  */






/*//! ====================================== =============== ============================================  */
/*//! ====================================== Student  Result ============================================  */
/*//! ====================================== =============== ============================================  */

    //! here admin can see student results
    function result_details()
    {
        $result_details['std_result'] = $this->Exam_model->fetch_student_result();
        // $this->load->view('admin/student_result/result_details_page', $result_details);
        $this->load->view('admin/student_result/result_details_page', $result_details);
    }


    //! admin can search the student result
    function student_result_search()
    {
        if ($this->input->post('submit')) 
        {
            $search_name = $this->input->post('search');
            $std_result_search['std_result'] = $this->Exam_model->student_result_search_model($search_name);
            $this->load->view('admin/student_result/result_details_page', $std_result_search);
        }
    }


    //! admin can delete particular student's result
    function delete_student_result()
    {
        $id = $this->input->get('id');

        if ($this->Exam_model->delete_student_result_byid($id)) 
        {
            redirect('Online_exam_admin/result_details');
        } 
        else 
        {
            echo "not delete";
        }
    }


/*//! ====================================== =================== ============================================  */
/*//! ====================================== Student  Result End ============================================  */
/*//! ====================================== =================== ============================================  */





/*//! ====================================== ============== ============================================  */
/*//! ====================================== Student  Query ============================================  */
/*//! ====================================== ============== ============================================  */

   //! admin can see the student query
    function student_query()
    {
        $result['std_query'] = $this->Exam_model->student_contact_details();
        $this->load->view('admin/student_query/student_query_page', $result);
    }

    //! admin can search the student query by student name
    function student_query_search()
    {
        if ($this->input->post('submit')) 
        {
            $search_name = $this->input->post('search');
            $std_query_search['std_query'] = $this->Exam_model->student_query_search_model($search_name);
            $this->load->view('admin/student_query/student_query_page', $std_query_search);
        }
    }


    //! admin can delete query of student
    function delete_student_query()
    {
        $id = $this->input->get('id');
        if ($this->Exam_model->delete_student_query($id)) 
        {
            redirect(base_url('index.php/Online_exam_admin/student_query'));
        } 
        else 
        {
            echo "not delete";
        }
    }


/*//! ====================================== ================== ============================================  */
/*//! ====================================== Student  Query End ============================================  */
/*//! ====================================== ================== ============================================  */




/*//! ====================================== ================= ============================================  */
/*//! ====================================== Student  feedback ============================================  */
/*//! ====================================== ================= ============================================  */


    //! here admin can see student"s feedback 
    function student_feedback()
    {
        $result['std_feedback'] = $this->Exam_model->student_feedback_details();

        $this->load->view('admin/student_feedback/student_feedback_page', $result);
    }


    //! admin can search the student feedback by student name
    function student_feedback_search()
    {
        if ($this->input->post('submit')) 
        {
            $search_name = $this->input->post('search');
            $std_feedback_search['std_feedback'] = $this->Exam_model->student_feedback_search_model($search_name);
            $this->load->view('admin/student_feedback/student_feedback_page', $std_feedback_search);
        }
    }


    //! admin can delete feedback of student
    function delete_student_feedback()
    {
        $id = $this->input->get('id');

        if ($this->Exam_model->delete_student_feedback($id)) 
        {
            redirect('Online_exam_admin/student_feedback');
        } 
        else 
        {
            echo "not delete";
        }
    }
    

/*//! ====================================== ===================== ============================================  */
/*//! ====================================== Student  feedback End ============================================  */
/*//! ====================================== ===================== ============================================  */


}
?>