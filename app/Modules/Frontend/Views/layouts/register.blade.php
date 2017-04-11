<div class="container">
  <div class="row">
    <section class="register">
        <div class="container-fluid">
            <div class="row">
                <div id="overlay"></div>
                <h2>ĐĂNG KÝ & TƯ VẤN</h2>
                <p class="sub-form">Nhận ngay 3,500,000 đồng và áo thun ILA Summmer<br/>khi đăng ký trước 25/04/2017</p>
                <form action="{!!route('f.postContact')!!}" class="col-sm-8 col-sm-offset-2" method="POST" id="form_summer2017">
                    {!!Form::token()!!}
                    <div class="form-group">
                        <input type="text" name="fullname" class="form-control" placeholder="Họ và Tên">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" class="form-control" placeholder="Điện thoại">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                  {!!Form::select('id_city',['' =>'Chọn Thành Phố'] + $list_city,old('id_city'),['class'=>'form-control','placeholder'=>'Chọn thành phố'])!!}
                              </div>
                            </div>
                            <div class="col-sm-6" >
                                <div id="wrap-center">
                                  <select class="form-control col-sm-6" name="id_center" id="id_center">
                                      <option value="">Chọn trung tâm</option>
                                  </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-6">
                                <input type="email" class="form-control"  readonly placeholder="Bạn đang là học viên của ILA">
                            </div>
                            <div class="col-sm-6">
                                <span class="study_inline">
                                  <input type="radio" id="yes" name="study_ila" value="1" checked> <label for="yes">Có</label>
                                </span>
                                <span class="study_inline">
                                  <input type="radio" id="no" name="study_ila" value="0"> <label for="no">Không</label>
                                </span>
                            </div>
                        </div>
                        <div id="error_study_id"></div>
                    </div>
                    <center>
                        <input type="submit" name="btn-submit" value="Đăng ký">
                    </center>
                </form>
            </div>
        </div>
    </section>
  </div>

</div>
