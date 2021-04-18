<?php require APPROOT . '/views/inc/header.php'; ?>

<nav>
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/index">Home</a>
        </li>

        <li>
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Logout</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>

    <h1><?php echo $data['title']?></h1>

    <?php if(isset($_SESSION['user_id'])) : ?>
    <?php echo 'Welcome ' . $_SESSION['user_type'] . ', ' . $_SESSION['email'] ?>
    <?php endif; ?>
    
<?php require APPROOT . '/views/inc/footer.php'; ?>

