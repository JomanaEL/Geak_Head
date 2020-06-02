@extends('layouts.app')
@section('content')

        <main id="BOX">
        
                <table class="WelcomeCard">
                    <tr>
                {{-- right section --}}
                        <td align="center" class="Leftcard">
                            <h2>Welcome user</h2>
                            <p>Be a part of our community by signing up ! We promise to not send you spam mail :)</p>
                            <a href="{{ route('register')}}" type="button">Sign up</a>
                            <a href="{{ route('login')}}" type="button">Sign in</a>
                        </td>
                       
                {{-- left section --}}
                        <td align="right" valign="top"><img src="images/right1.png" alt=""></td>    
                    </tr>
                </table>
                
        </main>


          
@endsection