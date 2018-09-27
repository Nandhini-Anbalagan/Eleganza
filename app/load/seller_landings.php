<?php
	if(file_exists("../head.php")){
		include("../head.php");
		$dynamicFormId = Tokenizer::get('dynamic-form-id', Tokenizer::GET_TOKEN);
	}
?>

<div class="m-b-30" id="landingAgentPage">
	<h2 class="page-title"><?php echo $tr['landing_page'] ?>
		<?php if($_SESSION['user']['level'] > 50){ ?>
		 <span class="small"><a href="javascript:void(0)" title="<?php echo $tr['edit_title'] ?>" class="on-default edit"><i class="fa fa-pencil"></i> &nbsp; <?php echo $tr['edit'] ?></a></span>
		<?php } ?>
	</h2>
		<form role="form" id="landingForm" class="p-t-20" style="display: none" onsubmit="return validate(this);">
			<input type="hidden" name="action" value="<?php echo Tokenizer::add('post-action-landing', 20, 'landing'); ?>">
			<input type="hidden" name="case" value="<?php echo Tokenizer::add('post-case-landing-edit-seller', 20, 'edit-seller'); ?>">
			<input type="hidden" name="id">
			<div class="row">
				<div class="col-md-6">
					<h3><?php echo $tr['english'] ?></h3>
					<div class="form-group">
						<label for="city_en"><?php echo $tr['city'] ?></label>
						<input type="text" class="form-control" id="city_en" name="city_en" placeholder="<?php echo $tr['city'] ?>" required>
					</div>
					<h3>Landing Page 1</h3>
					<div class="form-group">
							<label for="LP1_EN_TITLE"><?php echo $tr['title'] ?></label>
							<input type="text" class="form-control" id="LP1_EN_TITLE" name="LP1_EN_TITLE" placeholder="<?php echo $tr['title'] ?>" required>
	</div>
	<div class="form-group">
							<label for="LP1_EN_SUB2"><?php echo $tr['sub_title'] ?> 1</label>
							<input type="text" class="form-control" id="LP1_EN_SUB2" name="LP1_EN_SUB2" placeholder="<?php echo $tr['sub_title'] ?> 1" required>
	</div>

	<div class="form-group">
							<label for="LP1_EN_BTN"><?php echo $tr['btn_label'] ?></label>
							<input type="text" class="form-control" id="LP1_EN_BTN" name="LP1_EN_BTN" placeholder="<?php echo $tr['btn_label'] ?> 5" required>
	</div>
	<div class="form-group">
		<label for="LP1_EN_FB_URL"><?php echo $tr['FB_label'] ?></label>
		<input type="text" class="form-control" id="LP1_EN_FB_URL" name="LP1_EN_FB_URL" placeholder="<?php echo $tr['FB_label'] ?> 5" required>
	</div>
	<div class="form-group">
		<label for="LP1_EN_TW_URL"><?php echo $tr['TW_label'] ?></label>
		<input type="text" class="form-control" id="LP1_EN_TW_URL" name="LP1_EN_TW_URL" placeholder="<?php echo $tr['TW_label'] ?> 5" required>
	</div>
	<div class="form-group">
		<label for="LP1_EN_INS_URL"><?php echo $tr['INS_label'] ?></label>
		<input type="text" class="form-control" id="LP1_EN_INS_URL" name="LP1_EN_INS_URL" placeholder="<?php echo $tr['INS_label'] ?> 5" required>
	</div>
	<div class="form-group">
		<label for="LP1_EN_GP_URL"><?php echo $tr['GP_label'] ?></label>
		<input type="text" class="form-control" id="LP1_EN_GP_URL" name="LP1_EN_GP_URL" placeholder="<?php echo $tr['GP_label'] ?> 5" required>
	</div>
	<h3>Landing Page 2</h3>
<div class="form-group">
						<label for="LP2_EN_TITLE"><?php echo $tr['title'] ?></label>
						<input type="text" class="form-control" id="LP2_EN_TITLE" name="LP2_EN_TITLE" placeholder="<?php echo $tr['title'] ?>" required>
</div>

<div class="form-group">
	<label for="LP2_EN_FB_URL"><?php echo $tr['FB_label'] ?></label>
	<input type="text" class="form-control" id="LP2_EN_FB_URL" name="LP2_EN_FB_URL" placeholder="<?php echo $tr['FB_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP2_EN_TW_URL"><?php echo $tr['TW_label'] ?></label>
	<input type="text" class="form-control" id="LP2_EN_TW_URL" name="LP2_EN_TW_URL" placeholder="<?php echo $tr['TW_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP2_EN_INS_URL"><?php echo $tr['INS_label'] ?></label>
	<input type="text" class="form-control" id="LP2_EN_INS_URL" name="LP2_EN_INS_URL" placeholder="<?php echo $tr['INS_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP2_EN_GP_URL"><?php echo $tr['GP_label'] ?></label>
	<input type="text" class="form-control" id="LP2_EN_GP_URL" name="LP2_EN_GP_URL" placeholder="<?php echo $tr['GP_label'] ?> 5" required>
</div>
<h3>Landing Page 3</h3>
<div class="form-group">
						<label for="LP3_EN_TITLE"><?php echo $tr['title'] ?></label>
						<input type="text" class="form-control" id="LP3_EN_TITLE" name="LP3_EN_TITLE" placeholder="<?php echo $tr['title'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_EN_NAME_LBL"><?php echo $tr['name_label'] ?></label>
						<input type="text" class="form-control" id="LP3_EN_NAME_LBL" name="LP3_EN_NAME_LBL" placeholder="<?php echo $tr['name_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_EN_PHONE_LBL"><?php echo $tr['phone_label'] ?></label>
						<input type="text" class="form-control" id="LP3_EN_PHONE_LBL" name="LP3_EN_PHONE_LBL" placeholder="<?php echo $tr['phone_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_EN_EMAIL_LBL"><?php echo $tr['email_label'] ?></label>
						<input type="text" class="form-control" id="LP3_EN_EMAIL_LBL" name="LP3_EN_EMAIL_LBL" placeholder="<?php echo $tr['email_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_EN_AREA_LBL"><?php echo $tr['area_label'] ?></label>
						<input type="text" class="form-control" id="LP3_EN_AREA_LBL" name="LP3_EN_AREA_LBL" placeholder="<?php echo $tr['area_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_EN_COMPANY_LBL"><?php echo $tr['company_label'] ?></label>
						<input type="text" class="form-control" id="LP3_EN_COMPANY_LBL" name="LP3_EN_COMPANY_LBL" placeholder="<?php echo $tr['company_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_EN_MESSAGE_LBL"><?php echo $tr['message_label'] ?></label>
						<input type="text" class="form-control" id="LP3_EN_MESSAGE_LBL" name="LP3_EN_MESSAGE_LBL" placeholder="<?php echo $tr['message_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_EN_BTN"><?php echo $tr['btn_label'] ?></label>
						<input type="text" class="form-control" id="LP3_EN_BTN" name="LP3_EN_BTN" placeholder="<?php echo $tr['btn_label'] ?>" required>
</div>
<div class="form-group">
	<label for="LP3_EN_FB_URL"><?php echo $tr['FB_label'] ?></label>
	<input type="text" class="form-control" id="LP3_EN_FB_URL" name="LP3_EN_FB_URL" placeholder="<?php echo $tr['FB_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP3_EN_TW_URL"><?php echo $tr['TW_label'] ?></label>
	<input type="text" class="form-control" id="LP3_EN_TW_URL" name="LP3_EN_TW_URL" placeholder="<?php echo $tr['TW_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP3_EN_INS_URL"><?php echo $tr['INS_label'] ?></label>
	<input type="text" class="form-control" id="LP3_EN_INS_URL" name="LP3_EN_INS_URL" placeholder="<?php echo $tr['INS_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP3_EN_GP_URL"><?php echo $tr['GP_label'] ?></label>
	<input type="text" class="form-control" id="LP3_EN_GP_URL" name="LP3_EN_GP_URL" placeholder="<?php echo $tr['GP_label'] ?> 5" required>
</div>
</div>
				<div class="col-md-6">
					<h3>French</h3>
					<div class="form-group">
						<label for="city_fr"><?php echo $tr['city'] ?></label>
						<input type="text" class="form-control" id="city_fr" name="city_fr" placeholder="<?php echo $tr['city'] ?>" required>
					</div>
					<h3>Landing Page 1</h3>
					<div class="form-group">
							<label for="LP1_FR_TITLE"><?php echo $tr['title'] ?></label>
							<input type="text" class="form-control" id="LP1_FR_TITLE" name="LP1_FR_TITLE" placeholder="<?php echo $tr['title'] ?>" required>
	</div>
	<div class="form-group">
							<label for="LP1_FR_SUB2"><?php echo $tr['sub_title'] ?> 1</label>
							<input type="text" class="form-control" id="LP1_FR_SUB2" name="LP1_FR_SUB2" placeholder="<?php echo $tr['sub_title'] ?> 1" required>
	</div>

	<div class="form-group">
							<label for="LP1_FR_BTN"><?php echo $tr['btn_label'] ?></label>
							<input type="text" class="form-control" id="LP1_FR_BTN" name="LP1_FR_BTN" placeholder="<?php echo $tr['btn_label'] ?> 5" required>
	</div>
	<div class="form-group">
		<label for="LP1_FR_FB_URL"><?php echo $tr['FB_label'] ?></label>
		<input type="text" class="form-control" id="LP1_FR_FB_URL" name="LP1_FR_FB_URL" placeholder="<?php echo $tr['FB_label'] ?> 5" required>
	</div>
	<div class="form-group">
		<label for="LP1_FR_TW_URL"><?php echo $tr['TW_label'] ?></label>
		<input type="text" class="form-control" id="LP1_FR_TW_URL" name="LP1_FR_TW_URL" placeholder="<?php echo $tr['TW_label'] ?> 5" required>
	</div>
	<div class="form-group">
		<label for="LP1_FR_INS_URL"><?php echo $tr['INS_label'] ?></label>
		<input type="text" class="form-control" id="LP1_FR_INS_URL" name="LP1_FR_INS_URL" placeholder="<?php echo $tr['INS_label'] ?> 5" required>
	</div>
	<div class="form-group">
		<label for="LP1_FR_GP_URL"><?php echo $tr['GP_label'] ?></label>
		<input type="text" class="form-control" id="LP1_FR_GP_URL" name="LP1_FR_GP_URL" placeholder="<?php echo $tr['GP_label'] ?> 5" required>
	</div>
	<h3>Landing Page 2</h3>
<div class="form-group">
						<label for="LP2_FR_TITLE"><?php echo $tr['title'] ?></label>
						<input type="text" class="form-control" id="LP2_FR_TITLE" name="LP2_FR_TITLE" placeholder="<?php echo $tr['title'] ?>" required>
</div>

<div class="form-group">
	<label for="LP2_FR_FB_URL"><?php echo $tr['FB_label'] ?></label>
	<input type="text" class="form-control" id="LP2_FR_FB_URL" name="LP2_FR_FB_URL" placeholder="<?php echo $tr['FB_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP2_FR_TW_URL"><?php echo $tr['TW_label'] ?></label>
	<input type="text" class="form-control" id="LP2_FR_TW_URL" name="LP2_FR_TW_URL" placeholder="<?php echo $tr['TW_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP2_FR_INS_URL"><?php echo $tr['INS_label'] ?></label>
	<input type="text" class="form-control" id="LP2_FR_INS_URL" name="LP2_FR_INS_URL" placeholder="<?php echo $tr['INS_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP2_FR_GP_URL"><?php echo $tr['GP_label'] ?></label>
	<input type="text" class="form-control" id="LP2_FR_GP_URL" name="LP2_FR_GP_URL" placeholder="<?php echo $tr['GP_label'] ?> 5" required>
</div>
<h3>Landing Page 3</h3>
<div class="form-group">
						<label for="LP3_FR_TITLE"><?php echo $tr['title'] ?></label>
						<input type="text" class="form-control" id="LP3_FR_TITLE" name="LP3_FR_TITLE" placeholder="<?php echo $tr['title'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_FR_NAME_LBL"><?php echo $tr['name_label'] ?></label>
						<input type="text" class="form-control" id="LP3_FR_NAME_LBL" name="LP3_FR_NAME_LBL" placeholder="<?php echo $tr['name_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_FR_PHONE_LBL"><?php echo $tr['phone_label'] ?></label>
						<input type="text" class="form-control" id="LP3_FR_PHONE_LBL" name="LP3_FR_PHONE_LBL" placeholder="<?php echo $tr['phone_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_FR_EMAIL_LBL"><?php echo $tr['email_label'] ?></label>
						<input type="text" class="form-control" id="LP3_FR_EMAIL_LBL" name="LP3_FR_EMAIL_LBL" placeholder="<?php echo $tr['email_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_FR_AREA_LBL"><?php echo $tr['area_label'] ?></label>
						<input type="text" class="form-control" id="LP3_FR_AREA_LBL" name="LP3_FR_AREA_LBL" placeholder="<?php echo $tr['area_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_FR_COMPANY_LBL"><?php echo $tr['company_label'] ?></label>
						<input type="text" class="form-control" id="LP3_FR_COMPANY_LBL" name="LP3_FR_COMPANY_LBL" placeholder="<?php echo $tr['company_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_FR_MESSAGE_LBL"><?php echo $tr['message_label'] ?></label>
						<input type="text" class="form-control" id="LP3_FR_MESSAGE_LBL" name="LP3_FR_MESSAGE_LBL" placeholder="<?php echo $tr['message_label'] ?>" required>
</div>
<div class="form-group">
						<label for="LP3_FR_BTN"><?php echo $tr['btn_label'] ?></label>
						<input type="text" class="form-control" id="LP3_FR_BTN" name="LP3_FR_BTN" placeholder="<?php echo $tr['btn_label'] ?>" required>
</div>
<div class="form-group">
	<label for="LP3_FR_FB_URL"><?php echo $tr['FB_label'] ?></label>
	<input type="text" class="form-control" id="LP3_FR_FB_URL" name="LP3_FR_FB_URL" placeholder="<?php echo $tr['FB_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP3_FR_TW_URL"><?php echo $tr['TW_label'] ?></label>
	<input type="text" class="form-control" id="LP3_FR_TW_URL" name="LP3_FR_TW_URL" placeholder="<?php echo $tr['TW_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP3_FR_INS_URL"><?php echo $tr['INS_label'] ?></label>
	<input type="text" class="form-control" id="LP3_FR_INS_URL" name="LP3_FR_INS_URL" placeholder="<?php echo $tr['INS_label'] ?> 5" required>
</div>
<div class="form-group">
	<label for="LP3_FR_GP_URL"><?php echo $tr['GP_label'] ?></label>
	<input type="text" class="form-control" id="LP3_FR_GP_URL" name="LP3_FR_GP_URL" placeholder="<?php echo $tr['GP_label'] ?> 5" required>
</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
						<div class="form-group">
											<label class="col-sm-12 control-label"><?php echo $tr['background'] ?> 1</label>
											<div class="col-sm-6">
												<div class="radio radio-warning">
													<input type="radio" id="bg1" value="default.jpg" name="defaultBackground1">
													<label for="bg1" class="imgMod" src="uploads/landings/default.jpg"> <?php echo $tr['background'] ?> 1 </label>
												</div>
												<div class="radio">
													<input type="radio" id="bg2" value="default2.jpg" name="defaultBackground1">
													<label for="bg2" class="imgMod" src="uploads/landings/default2.jpg"> <?php echo $tr['background'] ?> 2 </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" id="bg3" value="default3.jpg" name="defaultBackground1">
													<label for="bg3" class="imgMod" src="uploads/landings/default3.jpg"> <?php echo $tr['background'] ?> 3 </label>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="radio radio-danger">
													<input type="radio" id="bg4" value="default4.jpg" name="defaultBackground1">
													<label for="bg4" class="imgMod" src="uploads/landings/default4.jpg"> <?php echo $tr['background'] ?> 4 </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" id="bg5" value="default5.jpg" name="defaultBackground1">
													<label for="bg5" class="imgMod" src="uploads/landings/default5.jpg"> <?php echo $tr['background'] ?> 5 </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" id="bg6" value="default6.jpg" name="defaultBackground1">
													<label for="bg6" class="imgMod" src="uploads/landings/default6.jpg"> <?php echo $tr['background'] ?> 6 </label>
												</div>
											</div>
											<div class="col-sm-12">
											<div class="radio radio-info">
												<input type="radio" id="custom_background1" value="" name="defaultBackground1">
												<label for="bg7"> <?php echo $tr['custom_background'] ?> </label>
											</div>
										</div>
										<div class="col-sm-12">
										<div class="form-group">
											<input type="file" id="upload_image1" class="filestyle" data-buttonbefore="true">
											<em class="mutted"><?php echo $tr['upload_image'] ?></em>
											<input type="hidden" name="uploadedBg1">
										</div>
									</div>
										</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
											<label class="col-sm-12 control-label"><?php echo $tr['background'] ?> 2</label>
											<div class="col-sm-6">
												<div class="radio radio-warning">
													<input type="radio" id="bg1" value="default.jpg" name="defaultBackground2">
													<label for="bg1" class="imgMod" src="uploads/landings/default.jpg"> <?php echo $tr['background'] ?> 1 </label>
												</div>
												<div class="radio">
													<input type="radio" id="bg2" value="default2.jpg" name="defaultBackground2">
													<label for="bg2" class="imgMod" src="uploads/landings/default2.jpg"> <?php echo $tr['background'] ?> 2 </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" id="bg3" value="default3.jpg" name="defaultBackground2">
													<label for="bg3" class="imgMod" src="uploads/landings/default3.jpg"> <?php echo $tr['background'] ?> 3 </label>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="radio radio-danger">
													<input type="radio" id="bg4" value="default4.jpg" name="defaultBackground2">
													<label for="bg4" class="imgMod" src="uploads/landings/default4.jpg"> <?php echo $tr['background'] ?> 4 </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" id="bg5" value="default5.jpg" name="defaultBackground2">
													<label for="bg5" class="imgMod" src="uploads/landings/default5.jpg"> <?php echo $tr['background'] ?> 5 </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" id="bg6" value="default6.jpg" name="defaultBackground2">
													<label for="bg6" class="imgMod" src="uploads/landings/default6.jpg"> <?php echo $tr['background'] ?> 6 </label>
												</div>
											</div>
											<div class="col-sm-12">
											<div class="radio radio-info">
												<input type="radio" id="custom_background2" value="" name="defaultBackground2">
												<label for="bg7"> <?php echo $tr['custom_background'] ?> </label>
											</div>
										</div>
										<div class="col-sm-12">
										<div class="form-group">
											<input type="file" id="upload_image2" class="filestyle" data-buttonbefore="true">
											<em class="mutted"><?php echo $tr['upload_image'] ?></em>
											<input type="hidden" name="uploadedBg2">
										</div>
									</div>
										</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
											<label class="col-sm-12  control-label"><?php echo $tr['background'] ?> 3</label>
											<div class="col-sm-6">
												<div class="radio radio-warning">
													<input type="radio" id="bg1" value="default.jpg" name="defaultBackground3">
													<label for="bg1" class="imgMod" src="uploads/landings/default.jpg"> <?php echo $tr['background'] ?> 1 </label>
												</div>
												<div class="radio">
													<input type="radio" id="bg2" value="default2.jpg" name="defaultBackground3">
													<label for="bg2" class="imgMod" src="uploads/landings/default2.jpg"> <?php echo $tr['background'] ?> 2 </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" id="bg3" value="default3.jpg" name="defaultBackground3">
													<label for="bg3" class="imgMod" src="uploads/landings/default3.jpg"> <?php echo $tr['background'] ?> 3 </label>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="radio radio-danger">
													<input type="radio" id="bg4" value="default4.jpg" name="defaultBackground3">
													<label for="bg4" class="imgMod" src="uploads/landings/default4.jpg"> <?php echo $tr['background'] ?> 4 </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" id="bg5" value="default5.jpg" name="defaultBackground3">
													<label for="bg5" class="imgMod" src="uploads/landings/default5.jpg"> <?php echo $tr['background'] ?> 5 </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" id="bg6" value="default6.jpg" name="defaultBackground3">
													<label for="bg6" class="imgMod" src="uploads/landings/default6.jpg"> <?php echo $tr['background'] ?> 6 </label>
												</div>
											</div>
											<div class="col-sm-12">
											<div class="radio radio-info">
												<input type="radio" id="custom_background3" value="" name="defaultBackground3">
												<label for="bg7"> <?php echo $tr['custom_background'] ?> </label>
											</div>
										</div>
										<div class="col-sm-12">
										<div class="form-group">
											<input type="file" id="upload_image3" class="filestyle" data-buttonbefore="true">
											<em class="mutted"><?php echo $tr['upload_image'] ?></em>
											<input type="hidden" name="uploadedBg3">
										</div>
									</div>
										</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
			<div class="form-group">
				<button type="submit" class="btn btn-primary waves-effect waves-light pull-right"><?php echo $tr['submit'] ?></button>
			</div>
			</div>
			</div>
		</form>

	<div class="row" id="view">
		<div class="col-md-6">
			<h3><?php echo $tr['english'] ?></h3>
			<h4><?php echo $tr['city'] ?>: <span target="city_en" class="small"></span></h4>
			<h3>Landing Page 1</h3>
			<h4><?php echo $tr['title'] ?>: <span target="LP1_EN_TITLE" class="small"></span></h4>
			<h4><?php echo $tr['sub_title'] ?> : <span target="LP1_EN_SUB2" class="small"></span></h4>
			<h4><?php echo $tr['btn_label'] ?>  : <span target="LP1_EN_BTN" class="small"></span></h4>
			<h4><?php echo $tr['FB_label'] ?>: <span target="LP1_EN_FB_URL" class="small"></span></h4>
			<h4><?php echo $tr['TW_label'] ?>: <span target="LP1_EN_TW_URL" class="small"></span></h4>
			<h4><?php echo $tr['INS_label'] ?>: <span target="LP1_EN_INS_URL" class="small"></span></h4>
			<h4><?php echo $tr['GP_label'] ?>: <span target="LP1_EN_GP_URL" class="small"></span></h4>

			<h3>Landing Page 2</h3>
			<h4><?php echo $tr['title'] ?>: <span target="LP2_EN_TITLE" class="small"></span></h4>
			<h4><?php echo $tr['FB_label'] ?>: <span target="LP2_EN_FB_URL" class="small"></span></h4>
			<h4><?php echo $tr['TW_label'] ?>: <span target="LP2_EN_TW_URL" class="small"></span></h4>
			<h4><?php echo $tr['INS_label'] ?>: <span target="LP2_EN_INS_URL" class="small"></span></h4>
			<h4><?php echo $tr['GP_label'] ?>: <span target="LP2_EN_GP_URL" class="small"></span></h4>
			<h3>Landing Page 3</h3>
			<h4><?php echo $tr['title'] ?>: <span target="LP3_EN_TITLE" class="small"></span></h4>
			<h4><?php echo $tr['name_label'] ?> : <span target="LP3_EN_NAME_LBL" class="small"></span></h4>
			<h4><?php echo $tr['phone_label'] ?> : <span target="LP3_EN_PHONE_LBL" class="small"></span></h4>
			<h4><?php echo $tr['email_label'] ?> : <span target="LP3_EN_EMAIL_LBL" class="small"></span></h4>
			<h4><?php echo $tr['area_label'] ?> : <span target="LP3_EN_AREA_LBL" class="small"></span></h4>
			<h4><?php echo $tr['company_label'] ?> : <span target="LP3_EN_AREA_LBL" class="small"></span></h4>
			<h4><?php echo $tr['message_label'] ?> : <span target="LP3_EN_MESSAGE_LBL" class="small"></span></h4>
			<h4><?php echo $tr['btn_label'] ?> : <span target="LP3_EN_BTN" class="small"></span></h4>
			<h4><?php echo $tr['FB_label'] ?>: <span target="LP3_EN_FB_URL" class="small"></span></h4>
			<h4><?php echo $tr['TW_label'] ?>: <span target="LP3_EN_TW_URL" class="small"></span></h4>
			<h4><?php echo $tr['INS_label'] ?>: <span target="LP3_EN_INS_URL" class="small"></span></h4>
			<h4><?php echo $tr['GP_label'] ?>: <span target="LP3_EN_GP_URL" class="small"></span></h4>
			<br>
			<h3><?php echo $tr['sponsor_link'] ?></h3>
			<h4 class="clickable"><?php echo $tr['website'] ?>: <span target="homeEval_web_en" class="small" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo $tr['click_copy'] ?>"></span></h4>
			<h4 class="clickable"><?php echo $tr['facebook'] ?>: <span target="homeEval_facebook_en" class="small" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo $tr['click_copy'] ?>"></span></h4>
			<h4 class="clickable"><?php echo $tr['google_adword'] ?>: <span target="homeEval_google_en" class="small" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo $tr['click_copy'] ?>"></span></h4>
		</div>
		<div class="col-md-6">
			<h3><?php echo $tr['francais'] ?></h3>
			<h4><?php echo $tr['city'] ?>: <span target="city_fr" class="small"></span></h4>
			<h3>Landing Page 1</h3>
			<h4><?php echo $tr['title'] ?>: <span target="LP1_FR_TITLE" class="small"></span></h4>
			<h4><?php echo $tr['sub_title'] ?> : <span target="LP1_FR_SUB2" class="small"></span></h4>
			<h4><?php echo $tr['btn_label'] ?>  : <span target="LP1_FR_BTN" class="small"></span></h4>
			<h4><?php echo $tr['FB_label'] ?>: <span target="LP1_FR_FB_URL" class="small"></span></h4>
			<h4><?php echo $tr['TW_label'] ?>: <span target="LP1_FR_TW_URL" class="small"></span></h4>
			<h4><?php echo $tr['INS_label'] ?>: <span target="LP1_FR_INS_URL" class="small"></span></h4>
			<h4><?php echo $tr['GP_label'] ?>: <span target="LP1_FR_GP_URL" class="small"></span></h4>

			<h3>Landing Page 2</h3>
			<h4><?php echo $tr['title'] ?>: <span target="LP2_FR_TITLE" class="small"></span></h4>
			<h4><?php echo $tr['FB_label'] ?>: <span target="LP2_EN_FB_URL" class="small"></span></h4>
			<h4><?php echo $tr['TW_label'] ?>: <span target="LP2_EN_TW_URL" class="small"></span></h4>
			<h4><?php echo $tr['INS_label'] ?>: <span target="LP2_EN_INS_URL" class="small"></span></h4>
			<h4><?php echo $tr['GP_label'] ?>: <span target="LP2_EN_GP_URL" class="small"></span></h4>
			<h3>Landing Page 3</h3>
			<h4><?php echo $tr['title'] ?>: <span target="LP3_FR_TITLE" class="small"></span></h4>
			<h4><?php echo $tr['name_label'] ?> : <span target="LP3_FR_NAME_LBL" class="small"></span></h4>
			<h4><?php echo $tr['phone_label'] ?>: <span target="LP3_FR_PHONE_LBL" class="small"></span></h4>
			<h4><?php echo $tr['email_label'] ?>: <span target="LP3_FR_EMAIL_LBL" class="small"></span></h4>
			<h4><?php echo $tr['area_label'] ?> : <span target="LP3_FR_AREA_LBL" class="small"></span></h4>
			<h4><?php echo $tr['company_label'] ?> : <span target="LP3_FR_AREA_LBL" class="small"></span></h4>
			<h4><?php echo $tr['message_label'] ?> : <span target="LP3_FR_MESSAGE_LBL" class="small"></span></h4>
			<h4><?php echo $tr['btn_label'] ?> : <span target="LP3_FR_BTN" class="small"></span></h4>
			<h4><?php echo $tr['FB_label'] ?>: <span target="LP3_EN_FB_URL" class="small"></span></h4>
			<h4><?php echo $tr['TW_label'] ?>: <span target="LP3_EN_TW_URL" class="small"></span></h4>
			<h4><?php echo $tr['INS_label'] ?>: <span target="LP3_EN_INS_URL" class="small"></span></h4>
			<h4><?php echo $tr['GP_label'] ?>: <span target="LP3_EN_GP_URL" class="small"></span></h4>
			<br>
			<h3><?php echo $tr['sponsor_link'] ?></h3>
			<h4 class="clickable"><?php echo $tr['website'] ?>: <span target="homeEval_web_fr" class="small" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo $tr['click_copy'] ?>"></span></h4>
			<h4 class="clickable"><?php echo $tr['facebook'] ?>: <span target="homeEval_facebook_fr" class="small" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo $tr['click_copy'] ?>"></span></h4>
			<h4 class="clickable"><?php echo $tr['google_adword'] ?>: <span target="homeEval_google_fr" class="small" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo $tr['click_copy'] ?>"></span></h4>
		</div>
		<div class="col-md-4 text-center">
					<img src="" target="background1" class="img-thumbnail img-responsive" alt="" width="600">
				</div>
				<div class="col-md-4 text-center">
					<img src="" target="background2" class="img-thumbnail img-responsive" alt="" width="600">
				</div>
				<div class="col-md-4 text-center">
					<img src="" target="background3" class="img-thumbnail img-responsive" alt="" width="600">
				</div>
		</div>

	</div>
</div>

<script>
	$(function(){
		$('a.edit').click(function(){
			$("#view").toggle();
			$("#landingForm").toggle();
		});

		$('td[name="name"]').click(function(){
			$("#view").show();
			$("#landingForm").hide();
		});

		$('.clickable').click(function(){
			copyToClipboard($(this).find('span'));
			generateNotification("<?php echo $tr['copied'] ?>", "bottom-right", "info", 2000);
		})

		function copyToClipboard(element) {
			var $temp = $("<input>");
			$("body").append($temp);
			$temp.val($(element).text()).select();
			document.execCommand("copy");
			$temp.remove();
		}
	});
</script>
