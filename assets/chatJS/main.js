$(document).ready(function () {
  //sign up form
  $("#signUpSpan").on("click", function () {
    $("#loginForm").addClass("d-none");
    $("#signUpForm").removeClass("d-none");
  });
  $("#loginSpan").on("click", function () {
    $("#signUpForm").addClass("d-none");
    $("#loginForm").removeClass("d-none");
  });
  //sign up proccess
  $("#signUp").on("click", function () {
    let username = $("#username").val();
    let email = $("#signUpEmail").val();
    let age = $("#age").val();
    let password = $("#signUpPassword").val();
    let gender = $("#gender option:selected").val();
    $.post(
      "signUp.php",
      {
        username: username,
        password: password,
        email: email,
        age: age,
        gender: gender,
      },
      function (response) {
        if (response === "success") {
          window.location.href = "index.php";
        } else {
          $(".error").removeClass("d-none");
          $(".error").html(response);
        }
      }
    );
  });

  //login process
  $("#login").on("click", function () {
    let loginEmail = $("#loginEmail").val();
    let loginPassword = $("#loginPassword").val();
    $.post(
      "login.php",
      {
        loginEmail: loginEmail,
        loginPassword: loginPassword,
      },
      function (response) {
        if (response == "success") {
          window.location.href = "profile.php";
        } else {
          $(".error").removeClass("d-none");
          $(".error").html(response);
        }
      }
    );
  });
  //--search-functnality--//
  $("#search").on("keypress", function () {
    let search = $(this).val();

    $.post("search_result.php", { search: search }, function (search) {
      $(".search_data").removeClass("d-none");
      $(".search_data").html(search);
    });
  });
  $("#search").on("keydown", function (e) {
    if (e.which == 8 && $("#search").val() == "") {
      $(".search_data").addClass("d-none");
    }
  });
  //--send-request--//
  $("#send").on("click", function () {
    let friend_id = $(this).attr("friend");
    $(this).addClass("d-none");
    $.post(
      "send-request.php",
      { friend_id: friend_id },
      function (response) {}
    );
  });
  //accept-request//

  $(".send_message").on("click", function () {
    $(".message").removeClass("d-none");
    let myfriend = $(this).attr("userid");
    $("#send_message_btn").attr("userid", myfriend);
    $.post("message.php", { myfriend: myfriend }, function (response) {
      $(".content").html(response);
    });
  });
  $("#send_message_btn").on("click", function () {
    let content = $("#message_content").val();
    let myfriend = $(this).attr("userid");

    $.post(
      "send_message.php",
      { content: content, myfriend: myfriend },
      function (response) {
        $.post("message.php", { myfriend: myfriend }, function (response) {
          $(".content").html(response);
        });
        $(".content").html(response);
      }
    );
    $("#message_content").val("");
  });

  $("#fsubmit").on("click", function () {
    let feedback_title = $("#feedback_title").val();
    let feedback_description = $("#feedback_description").val();
    $.post(
      "feedback.php",
      {
        feedback_title: feedback_title,
        feedback_description: feedback_description,
      },
      function (response) {
        alert(response);
        window.location.href = "feedback.php";
      }
    );
  });
});
