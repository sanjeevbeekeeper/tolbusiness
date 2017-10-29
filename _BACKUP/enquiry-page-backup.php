<section class="companypage_container">
    <article class="article">
        <h3 class="page-header">Enquiry</h3>
        <div class="enquiry_container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form class="form-horizontal">
                            <?php the_content(); ?>
                        <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
                        <!-- Subject -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="subject">Subject:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="subject" placeholder="Enter Short Subject">
                            </div>
                        </div>
                        <!-- Name -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Enter your Name here">
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                        </div>
                        <!-- Country -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="country">Country:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="country">
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="tel">Phone:</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" id="tel" placeholder="Enter your Phone no.">
                            </div>
                        </div>
                        <!-- Model no. -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="modelno">Model no.:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="modelno">
                            </div>
                        </div>
                        <!-- Quantity -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Quantity:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="email">
                            </div>
                        </div>
                        <!-- email -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="comment">Comment:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input type="reset" class="btn btn-tol " value="Reset">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
</section>
