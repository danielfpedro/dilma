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
    <?= $this->Html->css('../lib/animate.css/animate.min') ?>
    <?= $this->Html->css('../lib/sweetalert2/dist/sweetalert2') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?= $this->Html->script('../lib/jquery/dist/jquery.min') ?>
    <?= $this->Html->script('../lib/jquery.countdown/dist/jquery.countdown') ?>
    <?= $this->Html->script('../lib/sweetalert2/dist/sweetalert2.min.js') ?>

    <script type="text/javascript">
        $(function(){
            $('body').countdown('2019/01/01 00:00:01', function(event) {
                var days = $('.countdown-days .countdown-number').html(event.strftime('%D'));
                var hours = $('.countdown-hours .countdown-number').html(event.strftime('%H'));
                var minutes = $('.countdown-minutes .countdown-number').html(event.strftime('%M'));
                var seconds = $('.countdown-seconds .countdown-number').html(event.strftime('%S'));
            });

            $.fn.extend({
                animateCss: function (animationName) {
                    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                    $(this).addClass('animated ' + animationName).one(animationEnd, function() {
                        $(this).removeClass('animated ' + animationName);
                    });
                }
            });

            $('form').submit(function(){
                var $this = $(this);
                var $btnAdd = $('#btn-add-email');

                var $email = $('#email');
                var emailValue = $email.val();
                var $spinner = $('.spinner');

                if (emailValue) {
                    $email
                        .attr('disabled', true);
                    $btnAdd
                        .attr('disabled', true);

                    swal({
                        type: 'warning',
                        title: 'Por favor, aguarde...',
                        showConfirmButton: false,
                        html: '<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 50%"></div><div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 50%"></div></div>',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });

                    window.setTimeout(function(){


                            $email
                                .attr('disabled', false);
                            $this
                                .attr('disabled', false);
                        swal({
                            type: 'success',
                            title: 'Email salvo',
                            text: 'Você será avisado.'
                        }, function(){
                            $email
                                .attr('disabled', false)
                                .val('');
                            $email
                                .blur()
                            $btnAdd
                                .attr('disabled', false);
                        });
                    }, 3000)

                } else {
                    $email
                        .focus()
                        .animateCss('jello');

                }
                return false;
            });

        });
    </script>
</body>
</html>
