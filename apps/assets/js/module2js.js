$(document).ready(function() {
    console.log("module3 jquery on fire");


    // USER JQUERY FUNCTION
    // side navbar

    $(document).on("click", "[name='DiscussionBoard']", function() {
        window.location.href = "m2_userDiscussionBoard.php";
    });

    $(document).on("click", "[name='Rating&Feedback']", function() {
        window.location.href = "m2_userRating&Feedback.php";
    });

    // USER JQUERY FUNCTION
    // content navbar

    $(document).on("click", "[name='AssignPost']", function() {
        window.location.href = "m2_userAssignPost.php";
    });

    $(document).on("click", "[name='PostStatus']", function() {
        window.location.href = "m2_userPostStatus.php";
    });

    $(document).on("click", "[name='Rating&Feedback']", function() {
        window.location.href = "m2_userRating&Feedback.php";
    });

    

    
});