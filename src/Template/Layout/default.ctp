<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('../lib/bootstrap/dist/css/bootstrap.min') ?>
    <?= $this->Html->css('style.min') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?= $this->Html->script('../lib/jquery/dist/jquery.min') ?>
    <?= $this->Html->script('../lib/jquery.countdown/dist/jquery.countdown') ?>

    <script type="text/javascript">
        $(function(){
            $('body').countdown('2019/01/01 00:00:01', function(event) {
                var days = $('.countdown-days .countdown-number').html(event.strftime('%D'));
                var hours = $('.countdown-hours .countdown-number').html(event.strftime('%H'));
                var minutes = $('.countdown-minutes .countdown-number').html(event.strftime('%M'));
                var seconds = $('.countdown-seconds .countdown-number').html(event.strftime('%S'));
            });
        });
    </script>
</body>
</html>
