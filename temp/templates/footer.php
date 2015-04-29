</div><!--.content end-->
<footer>
</footer>

<div id="signup1" class="lightbox mfp-hide">
    <div class="title">
        <p class="title">Create an account</p>
        <div class="close mfp-close">x</div>
    </div>
    <div class="wrapper">
        <span class="block-left title1">Carriers</span>
        <span class="block-right title1">Shippers</span>

        <div class="clr"></div>
        <a href="#signup2" class="lightbox-inline-open block-left">Sign up as a carrier</a>
        <a href="#signup3" class="lightbox-inline-open block-right">Sign up as a shipper</a>

        <div class="clr"></div>
    </div>
</div><!--.lightbox-end-->


<div id="signup2" class="lightbox mfp-hide">
    <div class="title">
        <p class="title">Carrier Account Setup</p>
        <div class="close mfp-close">x</div>
    </div>
    <div class="wrapper">
        <div class="carrier-container">
            <div class="carrier-right-item-header">
                <div class="carrier-header">Individual Driver</div>
            </div>
            <div class="carrier-right-item-header">
                <div class="carrier-header">Carrier</div>
            </div>
            <div class="clear"></div>

            <br />

            <div class="carrier-right-item-header">
                Image place 1
            </div>
            <div class="carrier-right-item-header">
                Image place 2
            </div>

            <div class="clear"></div>

            <br />

            <div class="carrier-left-item-1">
                <strong>Pricing:</strong>
            </div>
            <div class="carrier-left-item-2">
               <strong> Free for first 30 days</strong>
                <br/>
                $15/month per user
            </div>
            <div class="carrier-left-item-3">
                <strong>Free</strong>
            </div>
            <div class="clear"></div>
            <br />
            <br />

            <div class="carrier-left-item-1">
                <strong># of Users:</strong>
            </div>
            <div class="carrier-left-item-2">
                <strong> Unlimited</strong>
            </div>
            <div class="carrier-left-item-3">
                <strong>1 driver</strong>
            </div>

            <br />
            <br />

            <div class="carrier-right-item-header">
               <a href="#signup5" class="lightbox-inline-open"><div class="btn-blue"> Free Trial</div></a>
            </div>
            <div class="carrier-right-item-header">
               <a href="#signup4" class="lightbox-inline-open"> <div class="btn-blue">Sign up</div></a>
            </div>

            <div class="clear"></div>

            <strong>Features:</strong>

            <table class="carrier-table">
                <tbody>
                    <tr class="theader">
                        <th>Driver Mobile app</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr class="theader">
                       <td class="first">Hours of service E-log</td>
                       <td class="middle">+</td>
                       <td class="last">+</td>
                    </tr>
                    <tr class="theader">
                        <td class="first">DVIR w/ electronic submission</td>
                        <td class="middle">+</td>
                        <td class="last"></td>
                    </tr>
                </tbody>
            </table>


            <div class="clear"></div>
        </div>

        <div class="carrier-container">

        </div>
        <div class="clear"></div>
    </div>
</div>

<div id="signup4" class="lightbox mfp-hide">
    <div class="title">
        <p class="title">Carrier Account Setup</p>
        <div class="close mfp-close">x</div>
    </div>
    <div class="wrapper">
        <form class="js-form" method="POST" action="include/ajax/signup.php" autocomplete="off">
            <input type="hidden" name="type" value="carrier">

            <div class="js-block1">
                <table>
                    <tr>
                        <td>
                            <label for="first">First *</label>
                            <input type="text" name="first" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="last">Last *</label>
                            <input type="text" name="last" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="company">Company *</label>
                            <input type="text" name="company" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="phone">Phone *</label>
                            <input type="text" name="phone" class="block-right phone-masked" placeholder="XXX-XXX-XXXX" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address1">Address *<br>(Street)</label>
                            <input type="text" name="address1" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address2">Address <br>(Street)</label>
                            <input type="text" name="address2" class="block-right" placeholder="E.g. suite #" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="city">City *</label>
                            <input type="text" name="city" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="state">State *</label>
                            <input type="text" name="state" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="zip">Zip *</label>
                            <input type="text" name="zip" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email *</label>
                            <input type="text" name="email" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="position">Position / Title</label>
                            <input type="text" name="position" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr class="hr">
                        <td></td>
                        <td class="spacing"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mc">MC/MX# *</label>
                            <input type="text" name="mc" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="dot">DOT# *</label>
                            <input type="text" name="dot" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="carrierdrivers"># of drivers *</label>
                            <select name="carrierdrivers" class="block-right" autocomplete="off">
                                <option value="1">1</option>
                                <option value="2-5">2-5</option>
                                <option value="6-10">6-10</option>
                                <option value="11-20">11-20</option>
                                <option value="21-50">21-50</option>
                                <option value="50+">50+</option>
                            </select>
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Username *</label>
                            <input type="text" name="username" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>                        	
                        </td>
                    </tr>
                    <tr class="passwd">
                        <td>
                            <label for="password">Password *</label>
                            <input type="password" name="password" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="password2">Re-enter <br> password *</label>
                            <input type="password" name="password2" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr class="passwdInfo">
                        <td>
                            Password is case sensitive
                        </td>
                        <td class="spacing"></td>
                        <td>
                            Password is case sensitive
                        </td>
                    </tr>
                </table>
                <p class="terms-error"></p>

                <div class="text-center">
                    <a class="button termsshow">Sign up</a>
                </div>
            </div>
            <div class="js-block2">
                <div class="termsofuse">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                    imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                    Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                    porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
                    feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                    imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
                    rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                    adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam
                    quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet
                    nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus
                    nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam,
                    scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu
                    turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor,
                    suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante
                    arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper
                    ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Lorem ipsum
                    dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                    justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                    venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                    consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                    nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                    tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                    tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
                    orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales
                    sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida
                    magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis
                    sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit
                    fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                    In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget,
                    imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a,
                    consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc.
                    Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui.
                </div>
                <div class="text-center termmargin">
                    <input type="checkbox" class="js-terms" autocomplete="off">
                    <span>I certify that i have read and accept the terms and conditions of this site</span>

                    <p class="terms-error">You must scroll down and read through the terms and conditions before
                        checking the box</p>
                </div>
                <div class="text-center posrel">
                    <a class="button js-submit">Sign up</a>

                    <p class="preloader"></p>
                </div>
            </div>
        </form>
    </div>
</div><!--.lightbox-end-->

<div id="signup5" class="lightbox mfp-hide">
    <div class="title">
        <p class="title">Carrier Account Setup</p>
        <div class="close mfp-close">x</div>
    </div>
    <div class="wrapper">
        <form class="js-form" method="POST" action="include/ajax/signup.php" autocomplete="off">
            <input type="hidden" name="type" value="driver">

            <div class="js-block1">
                <table>
                    <tr>
                        <td>
                            <label for="first">First *</label>
                            <input type="text" name="first" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="last">Last *</label>
                            <input type="text" name="last" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="company">Company *</label>
                            <input type="text" name="company" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="phone">Phone *</label>
                            <input type="text" name="phone" class="block-right phone-masked" placeholder="XXX-XXX-XXXX" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address1">Address *<br>(Street)</label>
                            <input type="text" name="address1" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address2">Address <br>(Street)</label>
                            <input type="text" name="address2" class="block-right" placeholder="E.g. suite #" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="city">City *</label>
                            <input type="text" name="city" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="state">State *</label>
                            <input type="text" name="state" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="zip">Zip *</label>
                            <input type="text" name="zip" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email *</label>
                            <input type="text" name="email" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- <label for="position">Position / Title</label>
                             <input type="text" name="position" class="block-right">-->
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr class="hr">
                        <td></td>
                        <td class="spacing"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mc">MC/MX# *</label>
                            <input type="text" name="mc" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="dot">DOT# *</label>
                            <input type="text" name="dot" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!--<label for="carrierdrivers"># of drivers *</label>
                            <select name="carrierdrivers" class="block-right">
                                <option value="1">1</option>
                                <option value="2-5">2-5</option>
                                <option value="6-10">6-10</option>
                                <option value="11-20">11-20</option>
                                <option value="21-50">21-50</option>
                                <option value="50+">50+</option>
                            </select>-->
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Username *</label>
                            <input type="text" name="username" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>                        	
                        </td>
                    </tr>
                    <tr class="passwd">
                        <td>
                            <label for="password">Password *</label>
                            <input type="password" name="password" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="password2">Re-enter <br> password *</label>
                            <input type="password" name="password2" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr class="passwdInfo">
                        <td>
                            Password is case sensitive
                        </td>
                        <td class="spacing"></td>
                        <td>
                            Password is case sensitive
                        </td>
                    </tr>
                </table>
                <p class="terms-error"></p>

                <div class="text-center">
                    <a class="button termsshow">Sign up</a>
                </div>
            </div>
            <div class="js-block2">
                <div class="termsofuse">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                    imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                    Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                    porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
                    feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                    imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
                    rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                    adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam
                    quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet
                    nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus
                    nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam,
                    scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu
                    turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor,
                    suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante
                    arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper
                    ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Lorem ipsum
                    dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                    justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                    venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                    consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                    nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                    tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                    tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
                    orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales
                    sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida
                    magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis
                    sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit
                    fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                    In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget,
                    imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a,
                    consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc.
                    Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui.
                </div>
                <div class="text-center termmargin">
                    <input type="checkbox" class="js-terms" autocomplete="off">
                    <span>I certify that i have read and accept the terms and conditions of this site</span>

                    <p class="terms-error">You must scroll down and read through the terms and conditions before
                        checking the box</p>
                </div>
                <div class="text-center posrel">
                    <a class="button js-submit">Sign up</a>

                    <p class="preloader"></p>
                </div>
            </div>
        </form>
    </div>
</div><!--.lightbox-end-->

<div id="signup3" class="lightbox mfp-hide">
    <div class="title">
        <p class="title">Shipper Account Setup</p>
        <div class="close mfp-close">x</div>
    </div>
    <div class="wrapper">
        <form class="js-form" method="POST" action="include/ajax/signup.php" autocomplete="off">
            <input type="hidden" name="type" value="shipper">

            <div class="js-block1">
                <table>
                    <tr>
                        <td>
                            <label for="first">First *</label>
                            <input type="text" name="first" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="last">Last *</label>
                            <input type="text" name="last" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="company">Company *</label>
                            <input type="text" name="company" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="phone">Phone *</label>
                            <input type="text" name="phone" class="block-right phone-masked" placeholder="XXX-XXX-XXXX" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address1">Address *<br>(Street)</label>
                            <input type="text" name="address1" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address2">Address <br>(Street)</label>
                            <input type="text" name="address2" class="block-right" placeholder="E.g. suite #" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="city">City *</label>
                            <input type="text" name="city" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="state">State *</label>
                            <input type="text" name="state" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="zip">Zip *</label>
                            <input type="text" name="zip" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email *</label>
                            <input type="text" name="email" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="position">Position / Title</label>
                            <input type="text" name="position" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr class="hr">
                        <td></td>
                        <td class="spacing"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="shippinglocations"># of shipping <br> locations *</label>
                            <select name="shippinglocations" class="block-right" autocomplete="off">
                                <option value="1">1</option>
                                <option value="2-5">2-5</option>
                                <option value="6-10">6-10</option>
                                <option value="11-15">11-15</option>
                                <option value="16-20">16-20</option>
                                <option value="20+">20+</option>
                            </select>
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Username *</label>
                            <input type="text" name="username" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                        </td>
                    </tr>
                    <tr class="passwd">
                        <td>
                            <label for="password">Password *</label>
                            <input type="password" name="password" class="block-right" autocomplete="off">
                        </td>
                        <td class="spacing"></td>
                        <td>
                            <label for="password2">Re-enter <br> password *</label>
                            <input type="password" name="password2" class="block-right" autocomplete="off">
                        </td>
                    </tr>
                    <tr class="passwdInfo">
                        <td>
                            Password is case sensitive
                        </td>
                        <td class="spacing"></td>
                        <td>
                            Password is case sensitive
                        </td>
                    </tr>
                </table>
                <p class="terms-error"></p>

                <div class="text-center">
                    <a class="button termsshow">Sign up</a>
                </div>
            </div>
            <div class="js-block2">
                <div class="termsofuse">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                    imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                    Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                    porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
                    feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                    imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
                    rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                    adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam
                    quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet
                    nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus
                    nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam,
                    scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu
                    turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor,
                    suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante
                    arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper
                    ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Lorem ipsum
                    dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                    justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                    venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                    consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                    nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                    tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                    tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
                    orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales
                    sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida
                    magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis
                    sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit
                    fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                    In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget,
                    imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a,
                    consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc.
                    Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui.
                </div>
                <div class="text-center termmargin">
                    <input type="checkbox" class="js-terms" autocomplete="off">
                    <span>I certify that i have read and accept the terms and conditions of this site</span>

                    <p class="terms-error">You must scroll down and read through the terms and conditions before
                        checking the box</p>
                </div>
                <div class="text-center posrel">
                    <a class="button js-submit">Sign up</a>

                    <p class="preloader"></p>
                </div>
            </div>
        </form>
    </div>
</div><!--.lightbox-end-->

<a href="#confirmation" class="lightbox-inline-open displaynone js-confirmation"></a>
<div id="confirmation" class="lightbox mfp-hide">
    <div class="title">
        <p class="title">Registration</p>
        <div class="close mfp-close">x</div>
    </div>
    <div class="wrapper">
        <p class="js-conf-shipper">Please validate your account by clicking on the confirmation link in your email</p>

        <p class="js-conf-carrier">Your MC/MX# and DOT# are being confirmed and once approved your account will be
            activated</p>

        <p class="js-conf-mail_check">Your account is being reviewed. We will contact you shortly.</p>

        <div class="clr"></div>
    </div>
</div><!--.lightbox-end-->

<a href="#apierr" class="lightbox-inline-open displaynone apierr"></a>
<div id="apierr" class="lightbox mfp-hide" style="width:800px;">
    <div class="title">
        <p class="title">Registration</p>
        <div class="close mfp-close">x</div>
    </div>
    <div class="wrapper">
    <div style="text-align:center;margin-bottom:20px">
	    <img style="display: block; margin: 10px auto 20px;" src="<?=SITE.SCRIPT_PATH_ROOT?>images/logo.png" width="140px">
	    <p style="color:#180C54;font-size:16px;">We're sorry, but MC# or DOT# number you entered <b>could not be validated</b> with FMCSA database. Please, email us at the email address below if you belive you recived this message in error.</p>
	    <div style="height:1px;background:#8E9DB0;width:80%;margin: 10px auto;"></div>
	    <p>Please, click the button below to contact on us. If the button is not <br> visible please sent email to <a href="mailto:<?=SUPPORT_MAIL?>"><?=SUPPORT_MAIL?></a></p>
<a class="button" style="display:inline-block;" href="mailto:<?=SUPPORT_MAIL?>">Contact us</a>
    </div>
<div style="width: 300px;margin: 50px auto 0 auto;position: relative">
    <a href="#" style="float:left;">Contact us</a>
    <a href="#" style="float:right;">Privacy Policy</a>
</div>
        <div class="clr"></div>
    </div>
</div><!--.lightbox-end-->

<div id="login" class="lightbox mfp-hide">
    <div class="title">
        <p class="title">Authorization</p>
        <div class="close mfp-close">x</div>
    </div>    
    <div class="wrapper">
        <?php if ($_POST['auth_step'] == 0 || !$_POST['auth_step']):
            echo $site->showErrorReport('auth');?>
            <form action="<?= SCRIPT_PATH_ROOT; ?>auth.php" method="POST">
                <input type="hidden" name="auth_step" value="1"/>
                <input type="hidden" name="backurl"
                       value="<?= ($_POST['backurl']) ? $_POST['backurl'] : SCRIPT_PATH_ROOT ?>"/>
                <table>
                    <tr>
                        <td>login :</td>
                        <td><input type="text" name="login" value=""/></td>
                    </tr>
                    <tr>
                        <td>password :</td>
                        <td><input type="password" name="pass" value=""/></td>
                    </tr>
                </table>
                <br>
                <div style="text-align: center">
                    <a href="#" class="js-submit button inlineblock">Sign in</a>
                </div>                
            </form>
        <?php elseif ($_POST['auth_step'] == 1):
            $site->auth($_POST['login'], $_POST['pass']);
            ?>
        <?php endif ?>
        <div class="clr"></div>
    </div>
</div><!--.lightbox-end-->

<?php if ($_GET['action'] == 'setuppasswd' && $_GET['key'] != ''): ?>
    <a href="#setuppasswd" class="lightbox-inline-open displaynone" id="setuppasswd-a"></a>
    <div id="setuppasswd" class="lightbox mfp-hide">
        <div class="title">
            <p class="title">Set up password</p>
            <div class="close mfp-close">x</div>
        </div>
        <div class="wrapper">
            <form action="<?= SCRIPT_PATH_ROOT ?>include/ajax/setuppasswd.php?>" method="POST" class="js-form2">
                <p class="error"></p>
                <input type="hidden" name="key" value="<?= $_GET['key'] ?>"/>
                <input type="hidden" name="action" value="setuppasswd"/>
                <input type="hidden" name="backurl" value="<?= SCRIPT_PATH_ROOT ?>carrier_admin.php"/>
                <table>
                    <tr>
                        <td>password :</td>
                        <td><input type="password" name="pass1" value=""/></td>
                    </tr>
                    <tr>
                        <td>repeat password :</td>
                        <td><input type="password" name="pass2" value=""/></td>
                    </tr>
                </table>
                <br>

                <div class="text-center posrel">
                    <a class="button js-submit">Set up password</a>

                    <p class="preloader"></p>
                </div>
            </form>
            <div class="clr"></div>
        </div>
    </div><!--.lightbox-end-->
    <script>
        $(document).ready(function () {
            $('#setuppasswd-a').click();
        });
    </script>
<?php endif ?>


</div><!--.main-block-end-->
</body>
</html>