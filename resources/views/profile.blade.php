@extends('layout.script')
@extends('layout.header')
@extends('layout.head')

<section><div class="box">
                <div class="content">
                <div class="field half first">
                            <label for="name" style="color:green;" >Select Image</label>
                            <input name="image" id="name" type="file" placeholder="image" style="padding: 50px;"></div>
                    <h2 class="align-center">Get in Touch</h2>
                    <hr><form action="#" method="post">
                        <div class="field half first">
                            <label for="name" style="color:green; width:40px">Name</label>
                            <input name="name" id="name" type="text" placeholder="Name" style="background-color:gray; width: 259px; "></div>
                            <br>
                            <br>
                         <div class="field half">
                          
                            <label for="email" style="color:green">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email" style="background-color:gray;width: 259px;"></div>
                        <ul class="actions align-center"><li><input value="Send Message" class="button special" type="submit"></li>
                        </ul></form>
                </div>
            </div>
        </section>