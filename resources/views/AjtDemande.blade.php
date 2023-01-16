<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Admin Panel</title>
    <style >
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
}

a {
    text-decoration: none;
}

li {
    list-style: none;
}

h1,
h2 {
    color: #444;
}

h3 {
    color: #999;
}

.btn {
    background: #5386E4;
    color: white;
    padding: 5px 10px;
    text-align: center;
}

.btn:hover {
    color: #5386E4;
    background: white;
    padding: 3px 8px;
    border: 2px solid #5386E4;
}

.title {
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 15px 10px;
    border-bottom: 2px solid #999;
}

table {
    padding: 10px;
}

th,
td {
    text-align: left;
    padding: 8px;
}

.side-menu {
    position: fixed;
    background: #5386E4;
    width: 20vw;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.side-menu .brand-name {
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.side-menu li {
    font-size: 24px;
    padding: 10px 40px;
    color: white;
    display: flex;
    align-items: center;
}

.side-menu li img{
    width: 30px;
    height: 30px;
}

.side-menu li:hover {
    background: white;
    color: #5386E4;
}

.container {
    position: absolute;
    right: 0;
    width: 80vw;
    height: 100vh;
    background: #f1f1f1;
}

.container .header {
    position: fixed;
    top: 0;
    right: 0;
    width: 80vw;
    height: 10vh;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.container .header .nav {
    width: 90%;
    display: flex;
    align-items: center;
}

.container .header .nav .search {
    flex: 3;
    display: flex;
    justify-content: center;
}

.container .header .nav .search input[type=text] {
    border: none;
    background: #f1f1f1;
    padding: 10px;
    width: 50%;
}

.container .header .nav .search button {
    width: 40px;
    height: 40px;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container .header .nav .search button img {
    width: 30px;
    height: 30px;
}

.container .header .nav .user {
    flex: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.container .header .nav .user img {
    width: 40px;
    height: 40px;
}

.container .header .nav .user .img-case {
    position: relative;
    width: 50px;
    height: 50px;
}

.container .header .nav .user .img-case img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.container .content {
    position: relative;
    margin-top: 10vh;
    min-height: 90vh;
    background: #f1f1f1;
}

.container .content .cards {
    padding: 20px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.container .content .cards .card {
    width: 250px;
    height: 150px;
    background: white;
    margin: 20px 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container .content .cards .card .icon-case img{
    width: 40px;
    height: 40px;
}
.container .content .content-2 {
    min-height: 60vh;
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}

.container .content .content-2 .recent-payments {
    min-height: 50vh;
    flex: 5;
    background: white;
    margin: 0 25px 25px 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;
}

.container .content .content-2 .new-students {
    flex: 2;
    background: white;
    min-height: 50vh;
    margin: 0 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;
}

.container .content .content-2 .new-students table td:nth-child(1) img {
    height: 40px;
    width: 40px;
}

@media screen and (max-width: 1050px) {
    .side-menu li {
        font-size: 18px;
    }
}

@media screen and (max-width: 940px) {
    .side-menu li span {
        display: none;
    }
    .side-menu {
        align-items: center;
    }
    .side-menu li img {
        width: 40px;
        height: 40px;
    }
    .side-menu li:hover {
        background: #f05462;
        padding: 8px 38px;
        border: 2px solid white;
    }
}

@media screen and (max-width:536px) {
    .brand-name h1 {
        font-size: 16px;
    }
    .container .content .cards {
        justify-content: center;
    }
    .side-menu li img {
        width: 30px;
        height: 30px;
    }
    .container .content .content-2 .recent-payments table th:nth-child(2),
    .container .content .content-2 .recent-payments table td:nth-child(2) {
        display: none;
    }
}
    </style>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>TextBooks</h2>
            </a>        </div>
        <ul>
            <!--<li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>-->
            <li><img src="img/utilisateur.png" alt="" class="T">&nbsp;<span>Comptes</span> </li>
            <li><img src="img/calendar.png" alt="">&nbsp;<span>Calendriers</span> </li>
            <li><img src="img/reading.png" alt="">&nbsp;<span>Etudiants</span> </li>
            <!--<li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>-->
            <li><img src="img/question.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="img/settings (1).png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="img/search.png" alt=""></button>
                </div>
                <div class="user">
                    <img src="img/notifications.png" alt="">
                    <div class="img-case">
                        <img src="img/user.png" alt="">
                    </div>
                    <a href="{{url('logout')}}" class="btn">Logout</a>
                </div>
            </div>
        </div>
        <div class="content">
        <form action="${Consultation == null?'createConsultation':'editConsultation'}" method="POST" style="margin-top:100px">
            <h4>Crée un Etudiant</h4>
            <hr>
            &nbsp;
            <div class="name-field">
                <div>
                    <label>CIN</label>
            		<input type="text" placeholder="CIN" name="dateC" style="border: 1px solid #0298cf;border-radius: 7px;">
                </div>
                <div>
                    <label>Email</label>
            		<input type="date" placeholder="Email" name="dateC" style="border: 1px solid #0298cf;border-radius: 7px;">
                </div>
            </div>
            &nbsp;
            <div class="name-field">
                <div>
                    <label>Prenom</label>
            		<input type="text" placeholder="Prenom" name="dateC" style="border: 1px solid #0298cf;border-radius: 7px;">
                </div>
                <div>
                    <label>Nom</label>
            		<input type="text" placeholder="Nom" name="dateC" style="border: 1px solid #0298cf;border-radius: 7px;">
                </div>
            </div>
            &nbsp;
            <div class="name-field">
                <div>
                <label for="cars" >Module</label>
  				<select  id="cars" style="border: 1px solid #0298cf;border-radius: 7px;padding-top:10px;padding-bottom:12px">
    			<option value="" >choisir</option>
    			<option>Programmation JAVA</option>
                <option> Design Pattern et Genie Logiciel</option>
                <option>Programmation System et Reseaux</option>
                <option></option>
  				</select>
                </div>
                <div>
                <label for="cars" >Type</label>
  				<select name="medcin" id="cars" style="border: 1px solid #0298cf;border-radius: 7px;padding-top:10px;padding-bottom:12px">
    			<option value="" >choisir votre le type de l'examen</option>
    			<option>rattrappage</option>
                <option>Examen</option>
    			<option>Controle</option>

  				</select>
                </div>
            </div>
            &nbsp;
            &nbsp;
            <input type="submit" value="Creé"  style="margin-left:100px"></div>
            </form>
            <style>
form{
    margin-top:70px;
	margin-left:100px;
	/* margin-right:30px;  */
    display: flex;
    flex-direction: column;
    background-color: #fff;
    padding: 10px;
    border-radius: 6px;
    width : 80%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2  );
}
h4{
    text-align: center;
    font-size: 20px;
}
hr{
    margin: 10px 0;
    background-color: #ccc;
    border: 0;
    height: 1px;
    width: 100%;
}
.name-field{
    display: flex;
    width: 100%;
    justify-content: space-between;
}
.name-field div{
    display: flex;
    flex-direction: column;
}
.name-field div{
    width: 49%;
}
label{
    margin-bottom: 6px;
}
input{
    margin-bottom: 5px;
    padding: 5px;
    outline: 0;
    border: 1px solid rgba(0, 0, 0, 0.4);
}
input:focus{
    border: 1px solid #17a2b8;
}
input[type="submit"]{
    margin-top: 15px;
    background-color: #17a2b8;
    color: #fff;
    border: 1px solid #17a2b8;
    cursor: pointer;
}
p{
    text-align: center;
    margin: 5px 0;
    font-size: 14px;
}
p a{
    text-decoration: 0;
    color: #17a2b8;
}
            </style>
        </form>&nbsp;
			</div>
  <style>
/* Style the close button */
.close {
  position: absolute;
  right: 340px;
  top: 320px;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background: white;
    color: #5386E4;
}

/* Style the header */
.heade {
  background-color: #48CAE4;
  padding: 30px 40px;
  color: white;
  text-align: center;
}

/* Clear floats after the header */
.heade:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  margin: 0;
  border: none;
  border-radius: 0;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

.addBtn:hover {
  background-color: #bbb;
}
  </style>
    </div>
</body>

</html>
