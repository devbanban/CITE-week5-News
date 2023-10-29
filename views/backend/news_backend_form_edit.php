<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        ฟอร์มแก้ไขข้อมูลข่าวสาร
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
                            <form role="form" action="<?= site_url('news/editdata'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            สถานะ
                                        </div>
                                        <div class="col-sm-3">
                                           <select name="news_status" required class="form-control">
                                               <option value="<?= $rsedit->news_status; ?>">-<?= $rsedit->news_status; ?>-</option>
                                               <option value="">-เลือกใหม่-</option>
                                               <option value="show">-show-</option>
                                               <option value="hide">-hide-</option>
                                           </select>
                                            <span class="fr"><?= form_error('news_status'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            หัวข้อข่าว
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" name="news_title" class="form-control" minlength="4"  placeholder="หัวข้อข่าว" required value="<?= $rsedit->news_title;?>">
                                            <span class="fr"><?= form_error('news_title'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            เนื้อข่าวย่อๆ
                                        </div>
                                        <div class="col-sm-5">
                                            <textarea name="news_intro" class="form-control" required><?= $rsedit->news_intro;?></textarea>
                                            <span class="fr"><?= form_error('news_intro'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            รายละเอียดข่าว
                                        </div>
                                        <div class="col-sm-7">
                                            <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                                            <textarea name="news_detail" required minlength="5"><?= $rsedit->news_title;?></textarea>
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
                                             ภาพเก่า <br>
                                            <img src="<?= base_url('asset/img_news/'.$rsedit->news_img);?>" width="200px">

                                            <br>
                                            เลือกใหม่
                                            <br>
                                            *ขนาด 850 × 530 px  ไม่เกิน 200KB
                                            <input type="file" name="news_img" class="form-control"  accept="image/*" id="file" onchange="Filevalidation()">
                                            <script>
                                                Filevalidation = () => {
                                                    const fi = document.getElementById('file');
                                                    // Check if any file is selected.
                                                    if (fi.files.length > 0) {
                                                        for (const i = 0; i <= fi.files.length - 1; i++) {
                                                        
                                                            const fsize = fi.files.item(i).size;
                                                            const file = Math.round((fsize / 1024));
                                                            // The size of the file.
                                                            if (file >= 200) {
                                                                alert(
                                                                "ไฟล์ภาพใหญ่เกิน 200KB กรุณา Resize ขนาดภาพก่อนอัพโหลด !!!"); 
                                                                location.reload();
                                                            } 
                                                        }
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="hidden" name="news_id" value="<?= $rsedit->news_id;?>">
                                             <span class="fr"><?= form_error('news_id'); ?></span>
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