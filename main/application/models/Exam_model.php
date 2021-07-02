<?php
class Exam_model extends CI_Model
{
    //! here we check the login credential for admin
    function admin($admin_email,$admin_pass)
    {
        $query=$this->db->query("SELECT * FROM admin WHERE email='$admin_email' AND password='$admin_pass'");
        if($query->num_rows())
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    //! here we check the login credential for student
    function student_log_model($student_email,$student_pass)
    {

        $query=$this->db->query("SELECT * FROM `student_details` WHERE email='$student_email' AND password='$student_pass'");
        if($query->num_rows())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //! it fetch student name after login for exam
    function student_name_fetch($student_email)
    {
        $query=$this->db->query("SELECT `name` FROM `student_details` WHERE email='$student_email'");
        return $query->result(); 
    }


      //! here we do register  for student
    function student_register_model($student_name,$student_email,$student_pass,$student_phone,$date1)
    {
        $query1=$this->db->query("SELECT `email` FROM `student_details` WHERE email='$student_email'");
        if($query1->num_rows())
        {
             return false;
        }
        else{
            $query=$this->db->query("INSERT INTO `student_details`(`std_id`, `name`, `email`, `password`, `phone`,`date`) VALUES ('','$student_name','$student_email','$student_pass','$student_phone','$date1')");
            return true;  
        }
         
    }



    //! here admin can see question paper
    function question_details_display()
    {
        $query=$this->db->query("SELECT * FROM question_table");
        return $query->result();
    }
    //! it return the row that is to be updated
    function edit_question_records($id)
    {
        $query=$this->db->query("SELECT * FROM question_table  WHERE q_id='$id'");
        return $query->result();
    }

    //! we select the particular question to match the answer
    function fetch_question_byid($selected_qid)
    {
        $query=$this->db->query("SELECT * FROM question_table  WHERE q_id='$selected_qid'");
        return $query->result();
    }

    //! it will update the question 
    function update_question_model($topic,$question,$op1,$op2,$op3,$op4,$correct_ans,$id)
    {
        $query="UPDATE `question_table` SET `topic`='$topic',`question`='$question',`op1`='$op1',`op2`='$op2',`op3`='$op3',`op4`='$op4',`answer`='$correct_ans' WHERE q_id='$id'";
        if($this->db->query($query))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    //! here admin can delete particular question 
    function delete_question_records($id)
    {
        $query="DELETE FROM `question_table` WHERE q_id='$id'";
        if($this->db->query($query))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


     //! it return the questions
     function question_fetch($topic)
     {
         $query=$this->db->query("SELECT * FROM question_table  WHERE topic='$topic'");
         return $query->result();
     }


    //! here admin can see details of all student
    function student_details_display()
    {
        $query=$this->db->query("SELECT * FROM student_details");
        return $query->result();
    }



    //!  here admin can delete student details
    function delete_student_records($id)
    {
        $query="DELETE FROM `student_details` WHERE std_id='$id'";
        if($this->db->query($query))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    

    //! here admin can add question
    function add_question_model($topic,$question,$op1,$op2,$op3,$op4,$correct_ans)
    {
        $query=$this->db->query("INSERT INTO `question_table`(`q_id`, `topic`, `question`, `op1`, `op2`, `op3`, `op4`, `answer`) VALUES ('','$topic','$question','$op1','$op2','$op3','$op4','$correct_ans')");
        return true;
    }


    //! contact details of student list here with students query
    function student_query_model($student_name,$student_email,$student_phone,$student_query)
    {
        $query=$this->db->query("INSERT INTO `contact`(`std_id`, `student_name`, `email`, `phone`, `query`) VALUES ('','$student_name','$student_email','$student_phone','$student_query')");
        return true;
    }




    //! feedback details of student list here with 
    function student_feedback_model($student_name,$student_email,$feedback)
    {
        $query=$this->db->query("INSERT INTO `feedback`(`feed_id`, `name`, `email`, `experience`) VALUES ('','$student_name','$student_email','$feedback')");
        return true;
    }


    //!we store the students result in the database
    function save_result_students($std_name,$topic,$right)
    {
        $query=$this->db->query("INSERT INTO `student_result`(`std_id`, `name`, `topic`, `score`) VALUES ('','$std_name','$topic','$right')");
        return true;
    }
    //! we fetch all student result to show to admin
    function fetch_student_result()
    {
        $query=$this->db->query("SELECT * FROM student_result");
        return $query->result();
    }
    
    

    //! here admin can delete student's result
    function delete_student_result_byid($id)
    {
        $query="DELETE FROM `student_result` WHERE std_id='$id'";
        if($this->db->query($query))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    //! it search the student by name
    function student_search_model($search_name)
    {
        $query=$this->db->query("SELECT * FROM student_details  WHERE name='$search_name'");
        if($query->num_rows())
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    //! it search the result of student by name
    function student_result_search_model($search_name)
    {
        $query=$this->db->query("SELECT * FROM student_result  WHERE name='$search_name'");
        if($query->num_rows())
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    //! admin can see contact details of student
    function student_contact_details()
    {
        $query=$this->db->query("SELECT * FROM contact");
        return $query->result();
    }


    //! admin delete student's query
    function delete_student_query($id)
    {
        $query="DELETE FROM `contact` WHERE std_id='$id'";
        if($this->db->query($query))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    //! admin can search student's query
    function student_query_search_model($search_name)
    {
        $query=$this->db->query("SELECT * FROM contact  WHERE student_name='$search_name'");
        if($query->num_rows())
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }




    //! admin can see student's feedback
    function student_feedback_details()
    {
        $query=$this->db->query("SELECT * FROM feedback");
        return $query->result();
    }



    function delete_student_feedback($id)
    {
        $query="DELETE FROM `feedback` WHERE feed_id='$id'";
        if($this->db->query($query))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    //! admin can search student's feedback
    function student_feedback_search_model($search_name)
    {
        $query=$this->db->query("SELECT * FROM feedback  WHERE name='$search_name'");
        if($query->num_rows())
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }



    /* Added by Rohan Sadhukhan */
    function questionCount($t)
    {
        $qry = "SELECT * FROM `question_table` WHERE `topic` = '$t'";
        return $this->db->query($qry)->num_rows();
    }
}
?>