<div id="navBarContainer">
	<nav class="navBar">

		<span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
			<img src="assets/images/icons/logo.jpg">
		</span>


		<div class="group">
      <div class="navItem">

        <span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">
<svg viewBox="0 0 512 512" width="24" height="24" class="icon" xmlns="http://www.w3.org/2000/svg"><path d="M 256.274 60.84 L 84.324 166.237 L 84.324 443.063 L 193.27 443.063 L 193.27 293.73 L 320.228 293.73 L 320.228 443.063 L 428.222 443.063 L 428.222 165.476 L 256.274 60.84 Z M 256.274 35.95 L 448.452 149.145 L 448.452 464.395 L 300 464.395 L 300 315.062 L 213.499 315.062 L 213.499 464.395 L 64.095 464.395 L 64.095 150.161 L 256.274 35.95 Z" fill="currentColor"></path></svg>
<span class="text">Home</span>
        </span>
      </div>
			<div class="navItem">
				<span role='link' tabindex='0' onclick='openPage("search.php")' class="navItemLink">
					<svg viewBox="0 0 512 512" width="24" height="24" class="icon" xmlns="http://www.w3.org/2000/svg"><path d="M349.714 347.937l93.714 109.969-16.254 13.969-93.969-109.969q-48.508 36.825-109.207 36.825-36.826 0-70.476-14.349t-57.905-38.603-38.603-57.905-14.349-70.476 14.349-70.476 38.603-57.905 57.905-38.603 70.476-14.349 70.476 14.349 57.905 38.603 38.603 57.905 14.349 70.476q0 37.841-14.73 71.619t-40.889 58.921zM224 377.397q43.428 0 80.254-21.461t58.286-58.286 21.461-80.254-21.461-80.254-58.286-58.285-80.254-21.46-80.254 21.46-58.285 58.285-21.46 80.254 21.46 80.254 58.285 58.286 80.254 21.461z" fill="currentColor" fill-rule="evenodd"></path></svg>
					<span class="text">Search</span>
				</span>
			</div>




			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">
					<svg viewBox="0 0 512 512" width="24" height="24" class="icon" xmlns="http://www.w3.org/2000/svg"><path d="M291.301 81.778l166.349 373.587-19.301 8.635-166.349-373.587zM64 463.746v-384h21.334v384h-21.334zM192 463.746v-384h21.334v384h-21.334z" fill="currentColor"></path></svg>
					<span class="text">Your Library</span>
				</span>
			</div>

	</nav>
</div>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

ul.topbar {
  list-style-type: none;
  margin: 0;
  padding-left: 220px;
  overflow: hidden;
  background-color: #111;
}

ul.topbar li {float: left;}

ul.topbar li span {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.topbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.topbar span:hover, .dropdown:hover .dropbtn {
  background-color: #333;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content button {
  background-color: black; /* Green */
  border: 1px black;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 100%;
  display: block;
  right: 0;
}

.dropdown-content button:hover {
  background-color: #333;
}

.dropdown:hover .dropdown-content {
  display: block;
}

ul.topbar li.right {float: right;}
</style>
</head>
<body>


<ul class="topbar">
	<li><span ><svg viewBox="0 0 24 24" width="18" height="18" class="_6be6d9f3103325b95e6d4c0f6b10b783-scss" onclick="goBack()"><path fill="currentColor" d="M15.54 21.15L5.095 12.23 15.54 3.31l.65.76-9.555 8.16 9.555 8.16" ></path></svg></span></li>
	<li><span ><svg viewBox="0 0 24 24" width="18" height="18" class="_6be6d9f3103325b95e6d4c0f6b10b783-scss" onclick="goFoward()"><path fill="currentColor" d="M7.96 21.15l-.65-.76 9.555-8.16L7.31 4.07l.65-.76 10.445 8.92"></path></svg></span></li>

  <li><span role="link" tabindex="0" onclick="openPage('browse.php')" >Album</span></li>
  <li><span role="link" tabindex="0" onclick="openPage('artists.php')">Artists</span></li>
  <li><span role="link" tabindex="0" onclick="openPage('songs.php')" >Songs</span></li>
  <li class="right">
    <div class="dropdown">

    <button class="dropbtn"><svg viewBox="0 0 80 90" width="18" height="18" xmlns="http://www.w3.org/2000/svg"><title>User Icon</title><path d="M67.74 61.78l-14.5-8.334c-.735-.422-1.24-1.145-1.385-1.98-.145-.835.088-1.685.638-2.33l5.912-6.93c3.747-4.378 5.81-9.967 5.81-15.737v-2.256c0-6.668-2.792-13.108-7.658-17.67C51.622 1.92 45.17-.386 38.392.054c-12.677.82-22.607 11.772-22.607 24.934v1.483c0 5.77 2.063 11.36 5.81 15.736l5.912 6.933c.55.644.783 1.493.638 2.33-.143.834-.648 1.556-1.383 1.98l-14.494 8.33C4.7 66.077 0 74.15 0 82.844v6.76h3.333v-6.76c0-7.5 4.055-14.46 10.59-18.174l14.5-8.334c1.597-.918 2.692-2.487 3.007-4.302.315-1.815-.19-3.66-1.387-5.06l-5.913-6.936c-3.23-3.775-5.01-8.594-5.01-13.57v-1.484c0-11.41 8.562-20.9 19.488-21.608 5.85-.377 11.415 1.61 15.67 5.598 4.26 3.992 6.605 9.404 6.605 15.24v2.254c0 4.976-1.778 9.796-5.01 13.57l-5.915 6.935c-1.195 1.4-1.7 3.246-1.386 5.06.313 1.816 1.41 3.385 3.008 4.303l14.507 8.338c6.525 3.71 10.58 10.67 10.58 18.17v6.76H80v-6.76c0-8.695-4.7-16.768-12.26-21.063z" fill="currentColor" fill-rule="evenodd"></path></svg>
      <?php echo $userLoggedIn->getFirstAndLastName(); ?>
 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="btn-group">
                  <?php
        if($_SESSION['userLoggedIn']  == 'admin')
        {
            ?>
                <button  onclick="openPage('admin.php')">Admin</button>

<?php 
}
 ?>
    <button onclick="openPage('updateDetails.php')">Profile</button>
    <button onclick="logout()">Logout</button>
  </div>
    </div>
  </div> 
</li>

</ul>
<script>


function goBack() {
    if ('referrer' in document) {
        window.location = document.referrer;
        /* OR */
        //location.replace(document.referrer);
    } else {
        window.history.back();
    }
}

function goFoward() {
  window.history.go(1);
}
</script>
