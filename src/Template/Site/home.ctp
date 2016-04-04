<?= $this->assign('title', 'Dilma Countdown') ?>

<div class="home-container">
	<div class="home-content">
		<div class="home-content-hashtag">
			#dilma<strong>countdown</strong>
			<?= $this->Html->image('brasil_flag.png', ['class' => 'hashtag-brasil-flag']) ?>
		</div>
		<div class="home-content-logo">
			<?= $this->Html->image('logo.png') ?>
		</div>
		<div class="home-content-body">
			<div class="countdown-container">
				<div class="countdown-days">
					<div class="countdown-number">
						810
					</div>
					<div class="countdown-label">
						Dias
					</div>
				</div>
				<div class="countdown-hours">
					<div class="countdown-number">
						05
					</div>
					<div class="countdown-label">
						Horas
					</div>
				</div>
				<div class="countdown-minutes">
					<div class="countdown-number">
						23
					</div>
					<div class="countdown-label">
						Minutos
					</div>
				</div>
				<div class="countdown-seconds">
					<div class="countdown-number">
						14
					</div>
					<div class="countdown-label">
						Segundos
					</div>
				</div>
			</div>
			<p class="home-text">
				<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. -->
			</p>
			<div class="box-email-content">
				<div class="box-email-content-title">
					Em caso de Impeachment, prisão, cassação pelo TSE ou rr rrenz renúncia, avisamos você por email, querido.
				</div>
				<div class="row">
					<form method="POST">
						<div class="col-sm-9 col-md-9">
							<div class="form-group">
								<input
									autocomplete="off"
									type="email"
									class="form-control input-lg"
									placeholder="E-mail"
									name="email"
									id="email">
							</div>
						</div>
						<div class="col-sm-3 col-md-3" style="padding-left: 0;">
							<button
								type="submit"
								class="btn btn-default btn-block btn-lg"
								id="btn-add-email">
								OK
							</button>
						</div>
					</form>
				</div>
				<div class="row" id="loader" style="display: none;">
					<div class="col-md-12">
						<div class="progress">
							<div
								class="progress-bar progress-bar-success progress-bar-striped active"
								style="width: 50%">
								Salvando
							</div>
							<div
								class="progress-bar progress-bar-warning progress-bar-striped active"
								style="width: 50%">
								Aguarde...
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>

<div class="box-ad-banner">
</div>