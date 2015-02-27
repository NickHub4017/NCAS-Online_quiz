<div class="col-lg-9">
<div>
    <h3>Problem No: <?php echo $question->q_no ?></h3>

    <p><img src="/nca_online_quiz/imgs_problem/<?php echo $question->q_path ?>.jpg" alt="<?php echo $question->q_no ?>" /></p>
    <br>
    <div class="container">
        <form role="form" action="<?php echo base_url().'problem/submit/'.$question->q_no?>" method="POST">
            <input type="radio" name="answer" value="1" <?php $q=$question->q_no; if($answer->$q == 1) echo "checked" ?>>A<br>
            <input type="radio" name="answer" value="2" <?php $q=$question->q_no; if($answer->$q == 2) echo "checked" ?>>B<br>
            <input type="radio" name="answer" value="3" <?php $q=$question->q_no; if($answer->$q == 3) echo "checked" ?>>C<br>
            <input type="radio" name="answer" value="4" <?php $q=$question->q_no; if($answer->$q == 4) echo "checked" ?>>D<br>
            <input type="radio" name="answer" value="5" <?php $q=$question->q_no; if($answer->$q == 5) echo "checked" ?>>E<br>
            <input type="submit" name="answer_submit" value="Next"/>
        </form>
    </div>

</div>
</div>
</div>