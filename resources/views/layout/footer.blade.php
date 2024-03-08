<!-- Footer -->
	<footer id="footer" class="wrapper">
		<div class="inner">
			<section>
        

	</div>
	<footer id="footer" class="wrapper"><div class="inner">
        <section><div class="box">
                <div class="content">
                    <h2 class="align-center">Get in Touch</h2>
                    <hr>
                    <form action="/post" method="post">
                        @CSRF
                        <div class="field half first">
                     
                            <label for="name">Name of product</label>
                            <input name="name"  type="text" placeholder="Name" value="{{old('name')}}">
                            @error('name')
                                <span class="alert alert-danger" style="color:red">{{$message}}</span>

                        @enderror
                        </div>
                        <div class="field half">
                            
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email" value="{{old('email')}}">
                            @error('email')
                                <span class="alert alert-danger" style="color:red">{{$message}}</span>

                        @enderror

                        </div>
                          
                        <div class="field">
                        <label for="Massage">Category</label>
                        <input name="category" id="" type="text" placeholder="category" value="{{old('category')}}">
                        @error('category')
                                <span class="alert alert-danger" style="color:red">{{$message}}</span>

                        @enderror
                        </div>
                       

                        <div class="field">
                            <label for="message">Message</label>
                <input name="massage"  placeholder="Message" type="text" value="{{old('massage')}}"></input>
                        </div>
                            @error('massage')
                                <span class="alert alert-danger" style="color:red">{{$message}}</span>

                        @enderror
                        <ul class="actions align-center"><li><input value="Send Message" class="button special" type="submit"></li>
                        </ul>
                       
                    </form>
                </div>
            </div>
			<div class="copyright">
		Powered by: <a href="https://wahidullah.co/">Templated.co</a>.

        </section></div>
	</footer>
	

	