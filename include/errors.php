<?php  

//this file is used in most parts of the system. This displays all alert errors and more. The names of the functions explain what the error is for.

function displayIncorrectLogin(){
	echo '<div class="alert alert-block" style="color: #e55039;">
  <button style="color: #e55039;" type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 style="color: #e55039;">Error!</h4>
  The login details you provided are incorrect! Please retry.
	</div>';
}

function displayCorrectLogin(){
    echo '<div class="alert alert-block" style="color: #38ada9;">
  <button style="color: #38ada9;" type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 style="color: #38ada9;">Success!</h4>
  You have been logged in! You will now be redirected.
    </div>';
}

function displayNoAccess(){
    echo '<div class="alert alert-block" style="color: #f6b93b;">
  <button style="color: #f6b93b;" type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 style="color: #f6b93b;">Warning!</h4>
  You do not have access to this! All actions are logged!
    </div>';
}

function displayUnkownError(){
    echo '<div class="alert alert-block" style="color: #e55039;">
  <button style="color: #e55039;" type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 style="color: #e55039;">Error!</h4>
  An unknown error has occured! Try again later.
    </div>';
}

function displaySuccessfulRegister(){
    echo '<div class="alert alert-block" style="color: #38ada9;">
  <button style="color: #38ada9;" type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 style="color: #38ada9;">Woohoo!</h4>
  Your account has been successfully registered! You can now login.
    </div>';
}

function displayAddedToBasket(){
    echo '<div class="alert alert-block" style="color: #38ada9;">
  <button style="color: #38ada9;" type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 style="color: #38ada9;">Added To Basket!</h4>
  This item has been added to your basket.
    </div>';
}

?>
