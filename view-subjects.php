<?php include("top.html"); include("server.php");

// if user is not logged in, they cannot access this page
if(empty($_SESSION['adminEmail'])){
    header('location: admin-login.php');
}
?>
<div class="sidebar">
    <div class="logo-details">
        <img src="images/tutor.png" alt="banner logo" />
        <span class="logo_name">UP Peer Tutoring</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="admin-index.php">
                <i class='bx bx-grid-alt' ></i>
                <span class="link_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="view-sessions.php">
                <i class='bx bx-notepad' ></i>
                <span class="link_name">View Sessions</span>
            </a>
        </li>
        <li>
            <a href="view-accounts.php">
                <i class='bx bx-group' ></i>
                <span class="link_name">View Accounts</span>
            </a>
        </li>
        <li>
            <a href="view-subjects.php">
                <i class='bx bx-layer' ></i>
                <span class="link_name">View Subjects</span>
            </a>
        </li>
        <li>
            <a href="add-subjects.php">
                <i class='bx bx-layer-plus' ></i>
                <span class="link_name">Add Subjects</span>
            </a>
        </li>
        <li>
            <a href="admin-index.php?admin-logout='1'">
                <i class='bx bx-log-out' ></i>
                <span class="link_name">Logout</span>
            </a>
        </li>
    </ul>
</div>

<section class="home-section">
    <nav>
        <div class="sidebar-button">
           <i class='bx bx-menu sidebarBtn' ></i> 
            <span class="dashboard">Dashboard</span>
        </div>
        <div class="profile-details">
            <img src="images/user.png" alt="">
            <span class="user">Admin</span>
           <!--<i class='bx bx-chevron-down' ></i>--> 
        </div>
    </nav>

    <div class="home-content">
        <div class="overview-boxes">
            <div class="box">
                <div class="left-side">
                    <div class="box_topic">
<?php
//Fetch all subjects (subjects are a weak entity which depends on available tutors)
$query = "SELECT * FROM subject";
$result = mysqli_query($db, $query);

$i = 1;
?>
 <!--Table here --->
<table>
<caption>Viewing all subjects</caption>
<tr><th>#</th><th>Subject Title</th><th>Program</th></tr>
<?php 
while($row = mysqli_fetch_array($result)){
?>
    <tr><td><?=$i?></td><td><?=$row['title']?></td><td><?=$row['program']?></td></tr>
<?php 
    $i++; 
} 
?>
</table>                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script src="script.js"></script>

</body>
</html>
