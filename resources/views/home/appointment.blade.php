        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Form To Enroll Now</h1>

                                <div>
                                    @if(session()->has('message'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{session()->get('message')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                </div>

                                <form action="{{url('add_student')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="row g-3">

                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input name="parent_name" type="text" class="form-control border-0" id="gname" placeholder="Parent Name">
                                                <label for="gname">Parent Name</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input name="parent_email" type="email" class="form-control border-0" id="gmail" placeholder="Parent Email">
                                                <label for="gmail">Parent Email</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input name="parent_phone" type="number" class="form-control border-0" id="phone" placeholder="Parent Phone">
                                                <label for="phone">Parent Phone Number</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input name="child_name" type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                                <label for="cname">Child Name</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input name="child_age" type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                                <label for="cage">Child Age</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input name="child_grade" type="text" class="form-control border-0" id="grade" placeholder="Child Age">
                                                <label for="grade">Child Grade</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea name="message" class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <input type="submit" name="submit" value="Enroll" class="btn btn-outline-primary"/>
                                        </div>

                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="images/appointment.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>