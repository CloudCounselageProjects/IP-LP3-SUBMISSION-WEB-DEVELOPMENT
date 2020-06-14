

<!DOCTYPE html>
<html>
<title> Reply Message </title>
<!-- add icon link -->
        <link rel = "icon" href =  
"https://cdn2.iconfinder.com/data/icons/ux-and-ui-astute-vol-1/512/Full_Stack_Developer-512.png" 
        type = "image/x-icon"> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 .text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.message {
        width: 100%;
        min-height: 199px;
        padding: 15px 0px;
      }
      .message textarea {
        appearance: none;
        -webkit-appearance: none;
        width: 100%;
        border: 1px solid #d7d7d7;
        display: block;
        width: 100%;
        background: white;
        font-size: 15px;
        color: #0767d4;
        /* line-height: 1.2; */
        padding: 10px 20px;
        box-sizing: border-box;
      }

      .message textarea:focus {
        /* border: none; */
        outline: none;
      }
</style>
</head>

<body>
<!-- Navbar (sit on top) -->
<header>
<div class="w3-display-container w3-dark-grey" style="height:50px;">
  </div>
</header>

<div class="w3-content w3-card w3-margin-top" style="width: 800px;">
  <div class="w3-display-container w3-margin-top">
  <div class="w3-row-padding">
    <div class="w3-third">
      <img class="w3-round  w3-animate-top w3-margin-top" src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg" style="width: 200px; height: 200px;">
      <h4><i class="fa fa-clock-o"></i> From, Vikas Mandal</h4>
    </div>
    <div class="w3-third w3-center" style="margin-top: 50px;">
      <img src="https://s4.thingpic.com/images/Gf/3tEy9Da4omQ8U25iMsr9Sd69.jpeg" style="width: 100px; height: 100px;">
    </div>
    <div class="w3-third">
      <img class="w3-round  w3-animate-top w3-margin-top" src="https://image.freepik.com/free-vector/businessman-character-avatar-icon-vector-illustration-design_24877-18271.jpg" style="width: 200px; height: 200px;">
      <h4><i class="fa fa-clock-o"></i> To, </h4>
    </div>
  </div>
  <hr>
  </div>
  
  <div class="w3-container w3-margin-bottom">
  <form action="msgprocess.php" method="POST">
      <div class="w3-section">
        <label>Email ID</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label>Subject</label>
        <input class="w3-input w3-border" type="text" name="subject" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <div class="message">
          <textarea
            class="input100"
            name="message"
            id=""
            cols="30"
            rows="10"
            placeholder=""
          ></textarea>
          <span class="focus-input100-1"></span>
          <span class="focus-input100-2"></span>
        </div>
      </div>
      <button type="submit" name="btn_send" class="w3-button w3-black w3-margin-bottom "><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>
  
  
</div>


<footer class="footer">

  <div class="w3-display-container w3-dark-grey" style="height:50px;">
    <div class="w3-display-middle">
    <p> copyright&copy <span class="w3-text-pink"> 2020 </span>. All Rights Reserved .</p>
    </div>
  </div>
</footer>

</body>
</html>

