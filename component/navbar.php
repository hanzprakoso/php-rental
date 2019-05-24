<nav class="navbar navbar-fixed-top light-blue darken-4">
	<ul>
        <li>
            <?php if(isset($_GET['page'])){
                        if($_GET['page'] == 'home'){
                            echo '<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>';
                        }
                    }
            ?>
        </li>
        <li>
            <a href="?page=home">Home</a>
        </li>
        <li>
            <a href="?page=logout">Logout</a>
        </li>
    </ul>
</nav>