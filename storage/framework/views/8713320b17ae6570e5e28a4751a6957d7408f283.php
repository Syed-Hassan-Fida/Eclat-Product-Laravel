<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(get_static_option('site_'.get_user_lang().'_title').' '.get_static_option('site_'.get_user_lang().'_tag_line')); ?></title> 
        
    <style>
        .mail-container {
            max-width: 650px;
            margin: 0 auto;
            text-align: center;
        }

        .mail-container .logo-wrapper {
            background-color: #111d5c;
            padding: 20px 0 20px;
        }

        table {
            margin: 0 auto;
        }

        table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table td, table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #111d5c;
            color: white;
        }

        footer {
            margin: 20px 0;
            font-size: 10px;
            text-align: left;
        }
        .mail-container .message-box{
            text-align: left;
        }
         .logo-wrapper img{
            max-width: 200px;
        }
    </style>
</head>
<body>
<div class="mail-container">
    <div class="logo-wrapper">
        <a href="<?php echo e(url('/')); ?>">
            <?php
                $site_logo = get_attachment_image_by_id(get_static_option('site_white_logo'),"full",false);
            ?>
            <?php if(!empty($site_logo)): ?>
                <img src="<?php echo e($site_logo['img_url']); ?>" alt="<?php echo e(get_static_option('site_'.get_default_language().'_title')); ?>">
            <?php endif; ?>
        </a>
    </div>
    <div class="message-box">
        <p>Hi <?php echo e($name); ?></p>
        <br>
        <p>Thank you for signing up for a Eclat Product account.</p>
        <br>
        <p>Your Token is:</p>
        <p><?php echo e($token); ?></p>
        <br>
        <p>Your limit will ends after 20 searches on <?php echo e($token_expire_date); ?></p>
        <br>
        <p>Thank you</p>
        <br>
        <p>------------------------------------</p>
        <p>Eclat Product</p>
        <p>www.eclatproduct.com</p>
        
    </div>
    <footer>
        &copy; All Right Reserved By <?php echo e(get_static_option('site_'.get_default_language().'_title')); ?>

    </footer>
</div>
</body>
</html>
<?php /**PATH C:\xampp7-2\htdocs\projects\well-known\@core\resources\views/mail/email_token.blade.php ENDPATH**/ ?>