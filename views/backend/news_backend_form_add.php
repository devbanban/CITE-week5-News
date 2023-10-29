<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        ฟอร์มเพิ่มข้อมูลข่าวสาร
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Your Page Content Here -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <!-- <h3 class="box-title"> +ข่าวใหม่ </h3> -->
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?= site_url('news/adding'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            หัวข้อข่าว
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" name="news_title" class="form-control" minlength="4"  placeholder="หัวข้อข่าว" required value="<?= set_value('news_title'); ?>">
                                            <span class="fr"><?= form_error('news_title'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            เนื้อข่าวย่อๆ
                                        </div>
                                        <div class="col-sm-5">
                                            <textarea name="news_intro" class="form-control" required><?= set_value('news_intro'); ?></textarea>
                                            <span class="fr"><?= form_error('news_intro'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            รายละเอียดข่าว
                                        </div>
                                        <div class="col-sm-7">
                                            <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                                            <textarea name="news_detail" required minlength="5"><?= set_value('news_intro'); ?></textarea>
                                            <span class="fr"><?= form_error('news_detail'); ?></span>
                                            <script>
                                            CKEDITOR.replace( 'news_detail' );
                                            </script>
                                        </div>
                                    </div>
                                    
                                  
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            ภาพ
                                        </div>
                                        <div class="col-sm-4">
                                            *ขนาด 850 × 530 px ไม่เกิน 200KB
                                            <input type="file" name="news_img" class="form-control" required accept="image/*">
                                            <span class="fr"><?= $error;?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                        </div>
                                        <div class="col-sm-10">
                                            <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?php echo  site_url('news'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                        </div>
                                    </div>
                                    
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->