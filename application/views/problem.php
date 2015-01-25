<div class="col-lg-9">
<div>
    <h3>Problem No: <?php echo $question->q_no ?></h3>

    <p><img src="/nca_online_quiz/imgs_problem/<?php echo $question->q_path ?>.jpg" alt="<?php echo $question->q_no ?>" /></p>
    <br>
    <div class="container">
        <form role="form">
            <?php
            foreach($answer as $key){
                echo '<div class="radio">'.
                    '<label><input type="radio" name="answer1"><img src="/nca_online_quiz/imgs_problem/'.$key->a_path.'.jpg" /></label>'.
                    '</div>';
            }
            ?>
        </form>
    </div>

</div>
</div>
</div>