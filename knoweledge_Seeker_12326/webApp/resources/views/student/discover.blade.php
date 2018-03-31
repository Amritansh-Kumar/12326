@extends('student.layout.master')


@section('content')
    @if(($prediction->personality == 'ENFJ'))
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/counselor.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Counselor</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="{{ asset('img/hr-manager.png') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Hr-Manager</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/teacher.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center; margin-left: 5rem">Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> As an ENFJ, you're primary mode of living is focused externally, where you deal with
                                things according to how you feel about them, or how they fit into your personal value
                                system. Your secondary mode is internal, where you take things in primarily via your
                                intuition. You are people-focused individual. More so than any other type, you have
                                excellent people skills. You understand and care about people, and have a special talent
                                for bringing out the best in others.</p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Tolerant</b> – You are a true team player, and recognize that that means
                                        listening to other peoples’ opinions, even when you contradict your own.</p>
                                </li>
                                <li>
                                    <p><b> Reliable</b> – The one thing that galls you the most is the idea of letting
                                        down a person or cause you believe in. </p>
                                </li>
                                <li>
                                    <p><b>Charismatic</b> – Charm and popularity are qualities Protagonists have in
                                        spades. You instinctively know how to capture an audience, and pick up on mood
                                        and motivation – whatever the situation calls for.</p>
                                </li>
                                <li>
                                    <p><b>Altruistic</b> – Uniting these qualities is yours unyielding desire to do good
                                        in and for yourcommunities, be it in your own home or the global stage. </p>
                                </li>
                                <li>
                                    <p><b>Natural Leaders</b> –You can often end up in leadership roles at the request
                                        of others, cheered on by the many admirers of your strong personality and
                                        positive vision.</p>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Overly Idealistic</b> - Sometimes you are more likely to feel pity for
                                        peoples, opposition than anger, and can earn a reputation of naïveté.</p>
                                </li>
                                <li>
                                    <p><b>Too Selfless</b> – You can bury yourself in your hopeful promises, feeling
                                        others’ problems as your own and striving hard to meet their word. </p>
                                </li>
                                <li>
                                    <p><b>Too Sensitive</b> – Your sensitivity to others means that you sometimes can
                                        feel problems that aren’t your own and try to fix things they can’t fix,
                                        worrying if you are doing enough.</p>
                                </li>
                                <li>
                                    <p><b> Fluctuating Self-Esteem</b> –If you fail to meet a goal or to help someone
                                        you said you’d help, your self-confidence will undoubtedly plummet.</p>
                                </li>
                                <li>
                                    <p><b>Struggle to Make Tough Decisions</b> – If caught between a rock and a hard
                                        place, you can be stricken with paralysis, imagining all the consequences of
                                        your actions, especially if those consequences are humanitarian.
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>

                </ul>


            </div>
        </div>
        {{--</div>--}}
       @elseif(($prediction->personality) == 'ENFP')
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/conservation_scientist.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Conservation Scientist</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="{{ asset('img/landscape_architect.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center"> Architect</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/editor.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center; margin-left: 5rem">Editor</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> As an ENFP, your primary mode of living is focused externally, where you take things in
                                primarily via your intuition. Your secondary mode is internal, where you deal with
                                things according to how you feel about them, or how they fit in with your personal value
                                system. ENFPs are warm, enthusiastic people, typically very bright and full of
                                potential. You try to live in the world of possibilities, and can become very passionate
                                and excited about things. </p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Curious</b> – Imaginative and open-minded, see all things as part of a big,
                                        mysterious puzzle called life.</p>
                                </li>
                                <li>
                                    <p><b> Observant</b> – To satisfy your curiosity, you try to notice every move and
                                        every idea, and never miss a moment. </p>
                                </li>
                                <li>
                                    <p><b>Energetic and Enthusiastic </b> – Enthusiasm has the dual benefit of giving
                                        you a chance to make more social connections, and of giving you a new source of
                                        information and experience</p>
                                </li>
                                <li>
                                    <p><b>Excellent Communicators</b> – You enjoy small talk and deep, meaningful
                                        conversations and adept at steering conversations towards your desired subjects.
                                    </p>
                                </li>
                                <li>
                                    <p><b>Know How to Relax </b> –You know that sometimes, nothing is as important as
                                        simply having fun and experiencing life’s joys. That Intuitive trait can let you
                                        know that it’s time to shake things up.</p>
                                </li>
                                <li>
                                    <p><b>Very Popular and Friendly </b> –You are a person who is approachable,
                                        interesting and exciting, with a cooperative and altruistic spirit and friendly,
                                        empathetic disposition. </p>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Poor Practical Skills </b> - Your main reliance on your ideas can result in
                                        struggles throughout your projects.</p>
                                </li>
                                <li>
                                    <p><b>Find it Difficult to Focus </b> – It’s hard for you to maintain interest as
                                        tasks drift towards routine, administrative matters, and away from broader
                                        concepts. </p>
                                </li>
                                <li>
                                    <p><b>Over think Things </b> – You don’t take things at face value –you look for
                                        underlying motives in even the simplest things.</p>
                                </li>

                            </ul>

                        </div>
                    </div>

                </ul>


            </div>
        </div>
    @elseif(($prediction->personality) == 'ENTJ')
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/executive_positions.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Executive Position</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="{{ asset('img/corporate_srategists.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Corporate Srategists</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/entrepreneur.jpg')}}" class="" alt="engineering">
                                    <p style="text-align: center; margin-left: 10rem">Entrepreneur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> As an ENTJ, your primary mode of living is focused externally, where you deal with
                                things rationally and logically. Your secondary mode is internal, where you take things
                                in primarily via your intuition. You are natural born leaders. You live in a world of
                                possibilities where you see all sorts challenges to be surmounted, and you want to be
                                the ones responsible for surmounting them. </p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Efficient</b> – You see inefficiency not just as a problem in its own right,
                                        but as something that pulls time and energy away from all your future goals.</p>
                                </li>
                                <li>
                                    <p><b> Energetic</b> – – Rather than finding this process taxing you are energized
                                        by it, genuinely enjoying leading your teams forward as you implement your plans
                                        and goals. </p>
                                </li>
                                <li>
                                    <p><b>Self-Confident </b> – You trust your abilities, make known your opinions, and
                                        believe in your capacities as leaders.</p>
                                </li>
                                <li>
                                    <p><b>Strong-Willed </b> – You strive to achieve your goals, but really nothing is
                                        quite as satisfying to you as rising to the challenge of each obstacle in your
                                        run to the finish line. </p>
                                </li>
                                <li>
                                    <p><b>Strategic Thinkers </b> –You are known for examining every angle of a problem
                                        and not just resolving momentary issues, but moving the whole project forward
                                        with their solutions.</p>
                                </li>
                                <li>
                                    <p><b> Charismatic and Inspiring </b> – These qualities combine can help you to
                                        accomplish your often ambitious goals that could never be finished alone.</p>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Stubborn and Dominant </b> - Sometimes you can be too capable of digging in
                                        your heels, trying to win every single debate and pushing your and yours vision
                                        alone.</p>
                                </li>
                                <li>
                                    <p><b>Intolerant</b> – “It’s my way or the highway” – You are notoriously
                                        unsupportive of any idea that distracts you from your primary goals, and even
                                        more so of ideas based on emotional considerations. </p>
                                </li>
                                <li>
                                    <p><b>Impatient </b> – You may misinterpret contemplation as stupidity or
                                        disinterest in your haste, a terrible mistake for a leader to make.</p>
                                </li>
                                <li>
                                    <p><b>Arrogant </b> – You respect quick thoughts and firm convictions, your own
                                        qualities, and look down on those who don’t match up. </p>
                                </li>
                                <li>
                                    <p><b>Poor Handling of Emotions </b> –You often trample others’ feelings,
                                        inadvertently hurting your partners and friends, especially in emotionally
                                        charged situations. </p>
                                </li>
                                <li>
                                    <p><b>Cold and Ruthless </b> – Your obsession with efficiency and unwavering belief
                                        in the merits of rationalism, especially professionally, makes you incredibly
                                        insensitive in pursuing their goals.</p>
                                </li>

                            </ul>

                        </div>
                    </div>

                </ul>


            </div>


        </div>
    @elseif(($prediction->personality)== 'ENTP')
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/electrical_engg.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Electrical Engineering</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="{{ asset('img/photographer.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Photographer</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/entrepreneur.jpg') }}" class="" alt="engineering">
                                    <p style="text-align: center; margin-left: 10rem">Entrepreneur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> As an ENTP, your primary mode of living is focused externally, where you take things in
                                primarily via your intuition. Your secondary mode is internal, where you deal with
                                things rationally and logically. Your primary interest in life is to understand the
                                world that you live in. You are an idea people. Your perceptive abilities can help you
                                to see possibilities everywhere. You are less interested in developing plans of actions
                                or making decisions than in generating possibilities and ideas. </p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Knowledgeable</b> – You rarely pass up a good opportunity to learn something
                                        new, especially abstract concepts. </p>
                                </li>
                                <li>
                                    <p><b> Quick Thinkers </b> – You have tremendously flexible mind, and you are able
                                        to shift from idea to idea without effort, drawing on your accumulated
                                        knowledge. </p>
                                </li>
                                <li>
                                    <p><b>Original </b> – Having little attachment to tradition, you are able to discard
                                        existing systems and methods and pull together disparate ideas from your
                                        extensive knowledge base.</p>
                                </li>
                                <li>
                                    <p><b> Excellent Brainstormers </b> – Nothing is quite as enjoyable to you as
                                        analyzing problems from every angle to find the best solutions. Combining your
                                        knowledge and originality to splay out every aspect of the subject at hand, you
                                        can be irreplaceable in brainstorming sessions. </p>
                                </li>
                                <li>
                                    <p><b> Charismatic </b> –Your confidence, quick thought and ability to connect
                                        disparate ideas in novel ways create a style of communication that is charming,
                                        even entertaining, and informative at the same time.</p>
                                </li>
                                <li>
                                    <p><b> Energetic </b> – When given a chance to combine these traits to examine an
                                        interesting problem, you can be truly impressive in your enthusiasm and energy,
                                        having no qualms with putting in long days and nights to find a solution.</p>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Very Argumentative </b> - If there’s anything you enjoy, it’s the mental
                                        exercise of debating an idea, and nothing is sacred. More consensus-oriented
                                        personality types will rarely appreciate the vigor with which you tear down your
                                        beliefs and methods, leading to a great deal of tension.</p>
                                </li>
                                <li>
                                    <p><b>Insensitive</b> – Being so rational, you often misjudge others feelings and
                                        push their debates well past others’ tolerance levels. </p>
                                </li>
                                <li>
                                    <p><b>Intolerant </b> – Unless people are able to back up their ideas in a round of
                                        mental sparring, you are likely to dismiss not just the ideas but the people
                                        themselves. </p>
                                </li>
                                <li>
                                    <p><b>Can Find It Difficult to Focus </b> – You can easily feel the boredom, and
                                        fresh thoughts are the solution, though not always a helpful one. </p>
                                </li>
                                <li>
                                    <p><b>Dislike Practical Matters </b> –When it comes to hard details and day-to-day
                                        execution where creative flair isn’t just unnecessary but actually
                                        counter-productive, you can lose interest, often with the consequence of your
                                        plans never seeing the light of day. </p>
                                </li>
                                <li>
                                    <p><b>Cold and Ruthless </b> – Your obsession with efficiency and unwavering belief
                                        in the merits of rationalism, especially professionally, makes you incredibly
                                        insensitive in pursuing their goals.</p>
                                </li>

                            </ul>

                        </div>
                    </div>

                </ul>


            </div>


        </div>
    @elseif(($prediction->personality)=='ESFJ')
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="conservation_scientist.jpg" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Conservation Scientist</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="landscape_architect.jpg" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Landscape Architect</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="editor.jpg" class="img-responsive" alt="engineering">
                                    <p style="text-align: center; margin-left: 5rem">Editor</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> As an ENFP, your primary mode of living is focused externally, where you take things in
                                primarily via your intuition. Your secondary mode is internal, where you deal with
                                things according to how you feel about them, or how they fit in with your personal value
                                system. ENFPs are warm, enthusiastic people, typically very bright and full of
                                potential. You try to live in the world of possibilities, and can become very passionate
                                and excited about things. </p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Curious</b> – Imaginative and open-minded, see all things as part of a big,
                                        mysterious puzzle called life.</p>
                                </li>
                                <li>
                                    <p><b> Observant</b> – To satisfy your curiosity, you try to notice every move and
                                        every idea, and never miss a moment. </p>
                                </li>
                                <li>
                                    <p><b>Energetic and Enthusiastic </b> – Enthusiasm has the dual benefit of giving
                                        you a chance to make more social connections, and of giving you a new source of
                                        information and experience</p>
                                </li>
                                <li>
                                    <p><b>Excellent Communicators</b> – You enjoy small talk and deep, meaningful
                                        conversations and adept at steering conversations towards your desired subjects.
                                    </p>
                                </li>
                                <li>
                                    <p><b>Know How to Relax </b> –You know that sometimes, nothing is as important as
                                        simply having fun and experiencing life’s joys. That Intuitive trait can let you
                                        know that it’s time to shake things up.</p>
                                </li>
                                <li>
                                    <p><b>Very Popular and Friendly </b> –You are a person who is approachable,
                                        interesting and exciting, with a cooperative and altruistic spirit and friendly,
                                        empathetic disposition. </p>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Poor Practical Skills </b> - Your main reliance on your ideas can result in
                                        struggles throughout your projects.</p>
                                </li>
                                <li>
                                    <p><b>Find it Difficult to Focus </b> – It’s hard for you to maintain interest as
                                        tasks drift towards routine, administrative matters, and away from broader
                                        concepts. </p>
                                </li>
                                <li>
                                    <p><b>Over think Things </b> – You don’t take things at face value –you look for
                                        underlying motives in even the simplest things.</p>
                                </li>

                            </ul>

                        </div>
                    </div>

                </ul>


            </div>
        </div>
    @elseif(($prediction->personality)=='ESFP')
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/executive_positions.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Executive Position</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="{{ asset('img/corporate_srategists.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Corporate Srategists</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/entrepreneur.jpg') }}" class="" alt="engineering">
                                    <p style="text-align: center; margin-left: 10rem">Entrepreneur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> As an ENTJ, your primary mode of living is focused externally, where you deal with
                                things rationally and logically. Your secondary mode is internal, where you take things
                                in primarily via your intuition. You are natural born leaders. You live in a world of
                                possibilities where you see all sorts challenges to be surmounted, and you want to be
                                the ones responsible for surmounting them. </p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Efficient</b> – You see inefficiency not just as a problem in its own right,
                                        but as something that pulls time and energy away from all your future goals.</p>
                                </li>
                                <li>
                                    <p><b> Energetic</b> – – Rather than finding this process taxing you are energized
                                        by it, genuinely enjoying leading your teams forward as you implement your plans
                                        and goals. </p>
                                </li>
                                <li>
                                    <p><b>Self-Confident </b> – You trust your abilities, make known your opinions, and
                                        believe in your capacities as leaders.</p>
                                </li>
                                <li>
                                    <p><b>Strong-Willed </b> – You strive to achieve your goals, but really nothing is
                                        quite as satisfying to you as rising to the challenge of each obstacle in your
                                        run to the finish line. </p>
                                </li>
                                <li>
                                    <p><b>Strategic Thinkers </b> –You are known for examining every angle of a problem
                                        and not just resolving momentary issues, but moving the whole project forward
                                        with their solutions.</p>
                                </li>
                                <li>
                                    <p><b> Charismatic and Inspiring </b> – These qualities combine can help you to
                                        accomplish your often ambitious goals that could never be finished alone.</p>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Stubborn and Dominant </b> - Sometimes you can be too capable of digging in
                                        your heels, trying to win every single debate and pushing your and yours vision
                                        alone.</p>
                                </li>
                                <li>
                                    <p><b>Intolerant</b> – “It’s my way or the highway” – You are notoriously
                                        unsupportive of any idea that distracts you from your primary goals, and even
                                        more so of ideas based on emotional considerations. </p>
                                </li>
                                <li>
                                    <p><b>Impatient </b> – You may misinterpret contemplation as stupidity or
                                        disinterest in your haste, a terrible mistake for a leader to make.</p>
                                </li>
                                <li>
                                    <p><b>Arrogant </b> – You respect quick thoughts and firm convictions, your own
                                        qualities, and look down on those who don’t match up. </p>
                                </li>
                                <li>
                                    <p><b>Poor Handling of Emotions </b> –You often trample others’ feelings,
                                        inadvertently hurting your partners and friends, especially in emotionally
                                        charged situations. </p>
                                </li>
                                <li>
                                    <p><b>Cold and Ruthless </b> – Your obsession with efficiency and unwavering belief
                                        in the merits of rationalism, especially professionally, makes you incredibly
                                        insensitive in pursuing their goals.</p>
                                </li>

                            </ul>

                        </div>
                    </div>

                </ul>


            </div>
        </div>
    @elseif($prediction->personality =='INFJ')
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/electrical_engg.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Electrical Engineering</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="{{ asset('img/photography-vector-1.png') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Photographer</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/entrepreneur.jpg') }}" class="" alt="engineering">
                                    <p style="text-align: center; margin-left: 10rem">Entrepreneur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> As an ENTP, your primary mode of living is focused externally, where you take things in
                                primarily via your intuition. Your secondary mode is internal, where you deal with
                                things rationally and logically. Your primary interest in life is to understand the
                                world that you live in. You are an idea people. Your perceptive abilities can help you
                                to see possibilities everywhere. You are less interested in developing plans of actions
                                or making decisions than in generating possibilities and ideas. </p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Knowledgeable</b> – You rarely pass up a good opportunity to learn something
                                        new, especially abstract concepts. </p>
                                </li>
                                <li>
                                    <p><b> Quick Thinkers </b> – You have tremendously flexible mind, and you are able
                                        to shift from idea to idea without effort, drawing on your accumulated
                                        knowledge. </p>
                                </li>
                                <li>
                                    <p><b>Original </b> – Having little attachment to tradition, you are able to discard
                                        existing systems and methods and pull together disparate ideas from your
                                        extensive knowledge base.</p>
                                </li>
                                <li>
                                    <p><b> Excellent Brainstormers </b> – Nothing is quite as enjoyable to you as
                                        analyzing problems from every angle to find the best solutions. Combining your
                                        knowledge and originality to splay out every aspect of the subject at hand, you
                                        can be irreplaceable in brainstorming sessions. </p>
                                </li>
                                <li>
                                    <p><b> Charismatic </b> –Your confidence, quick thought and ability to connect
                                        disparate ideas in novel ways create a style of communication that is charming,
                                        even entertaining, and informative at the same time.</p>
                                </li>
                                <li>
                                    <p><b> Energetic </b> – When given a chance to combine these traits to examine an
                                        interesting problem, you can be truly impressive in your enthusiasm and energy,
                                        having no qualms with putting in long days and nights to find a solution.</p>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Very Argumentative </b> - If there’s anything you enjoy, it’s the mental
                                        exercise of debating an idea, and nothing is sacred. More consensus-oriented
                                        personality types will rarely appreciate the vigor with which you tear down your
                                        beliefs and methods, leading to a great deal of tension.</p>
                                </li>
                                <li>
                                    <p><b>Insensitive</b> – Being so rational, you often misjudge others feelings and
                                        push their debates well past others’ tolerance levels. </p>
                                </li>
                                <li>
                                    <p><b>Intolerant </b> – Unless people are able to back up their ideas in a round of
                                        mental sparring, you are likely to dismiss not just the ideas but the people
                                        themselves. </p>
                                </li>
                                <li>
                                    <p><b>Can Find It Difficult to Focus </b> – You can easily feel the boredom, and
                                        fresh thoughts are the solution, though not always a helpful one. </p>
                                </li>
                                <li>
                                    <p><b>Dislike Practical Matters </b> –When it comes to hard details and day-to-day
                                        execution where creative flair isn’t just unnecessary but actually
                                        counter-productive, you can lose interest, often with the consequence of your
                                        plans never seeing the light of day. </p>
                                </li>
                            </ul>

                        </div>
                    </div>

                </ul>


            </div>


        </div>
    @elseif($prediction->personality == 'INFP')
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="hr-manager.png" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">H.R. Manager</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="technical_writer.png" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Technical Writer</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="office_manager.jpg" class="img-responsive" alt="engineering">
                                    <p style="text-align: center; margin-left: 10rem">Office Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> As an ESFJ, your primary mode of living is focused externally, where you deal with
                                things according to how you feel about them, or how they fit in with your personal value
                                system. Your secondary mode is internal, where you take things in via your five senses
                                in a literal, concrete fashion. You are warmly interested in others. You use your
                                Sensing and Judging characteristics to gather specific, detailed information about
                                others, and turn this information into supportive judgments. </p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Strong Practical Skills </b> –Excellent managers of day-to-day tasks and
                                        routine maintenance, enjoy making sure that those who are close to them are well
                                        cared for. </p>
                                </li>
                                <li>
                                    <p><b> Quick Thinkers </b> – You have tremendously flexible mind, and you are able
                                        to shift from idea to idea without effort, drawing on your accumulated
                                        knowledge. </p>
                                </li>
                                <li>
                                    <p><b>Strong Sense of Duty </b> – You have a strong sense of responsibility and
                                        strive to your obligations.</p>
                                </li>
                                <li>
                                    <p><b> Very Loyal </b> – Always eager to preserve the status quo, which makes you
                                        extremely loyal and trustworthy partner and employee. </p>
                                </li>
                                <li>
                                    <p><b> Sensitive and Warm </b> –These qualities come together to make you social,
                                        comfortable and well-liked. </p>
                                </li>

                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Worried about Social Status </b> - Your preoccupation with social status and
                                        influence, which affects many decisions you make, potentially limit your
                                        creativity and open-mindedness.</p>
                                </li>
                                <li>
                                    <p><b>Inflexible</b> – You place a lot of importance on what is socially acceptable,
                                        and can be very cautious, even critical of anything unconventional or outside
                                        the mainstream.</p>
                                </li>
                                <li>
                                    <p><b> Reluctant to Innovate or Improvise </b> – You may be unwilling to step out of
                                        your own comfort zones, usually for fear of being different.
                                </li>
                                <li>
                                    <p><b>Vulnerable to Criticism </b> – You can become very defensive and hurt if
                                        someone, especially a person close to you, criticizes your habits, beliefs or
                                        traditions.</p>
                                </li>
                                <li>
                                    <p><b>Often Too Needy </b> –You may start fishing for compliments, in an attempt to
                                        get reassurance of how much you are valued.</p>
                                </li>
                                <li>
                                    <p><b>Too Selfless </b> –You can often neglect your own needs in the process of
                                        helping others.</p>
                                </li>
                            </ul>

                        </div>
                    </div>

                </ul>


            </div>


        </div>
    @elseif($prediction->personality == 'INTP')
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="flight_attendant.jpg" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Flight Attendant</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="landscape_architect.jpg" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Architect</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="professor.jpg" class="img-responsive" alt="engineering">
                                    <p style="text-align: center; margin-left: 5rem">Professor</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> As an ESFP, your primary mode of living is focused externally, where you take things in
                                via your five senses in a literal, concrete fashion. Your secondary mode is internal,
                                where you deal with things according to how you feel about them. You love people and new
                                experiences, and enjoy being the center of attention. You have very strong
                                inter-personal skills, and may find yourself in the role of the peacemaker
                                frequently.</p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Tolerant</b> – You are a true team player, and recognize that that means
                                        listening to other peoples’ opinions, even when you contradict your own.</p>
                                </li>
                                <li>
                                    <p><b> Reliable</b> – The one thing that galls you the most is the idea of letting
                                        down a person or cause you believe in. </p>
                                </li>
                                <li>
                                    <p><b>Charismatic</b> – Charm and popularity are qualities Protagonists have in
                                        spades. You instinctively know how to capture an audience, and pick up on mood
                                        and motivation – whatever the situation calls for.</p>
                                </li>
                                <li>
                                    <p><b>Altruistic</b> – Uniting these qualities is yours unyielding desire to do good
                                        in and for yourcommunities, be it in your own home or the global stage. </p>
                                </li>
                                <li>
                                    <p><b>Natural Leaders</b> –You can often end up in leadership roles at the request
                                        of others, cheered on by the many admirers of your strong personality and
                                        positive vision.</p>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Overly Idealistic</b> - Sometimes you are more likely to feel pity for
                                        peoples, opposition than anger, and can earn a reputation of naïveté.</p>
                                </li>
                                <li>
                                    <p><b>Too Selfless</b> – You can bury yourself in your hopeful promises, feeling
                                        others’ problems as your own and striving hard to meet their word. </p>
                                </li>
                                <li>
                                    <p><b>Too Sensitive</b> – Your sensitivity to others means that you sometimes can
                                        feel problems that aren’t your own and try to fix things they can’t fix,
                                        worrying if you are doing enough.</p>
                                </li>
                                <li>
                                    <p><b> Fluctuating Self-Esteem</b> –If you fail to meet a goal or to help someone
                                        you said you’d help, your self-confidence will undoubtedly plummet.</p>
                                </li>
                                <li>
                                    <p><b>Struggle to Make Tough Decisions</b> – If caught between a rock and a hard
                                        place, you can be stricken with paralysis, imagining all the consequences of
                                        your actions, especially if those consequences are humanitarian.
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>

                </ul>


            </div>
        </div>
    @else
    {{--(strcmp($prediction->personality,'INTJ'))--}}
     <div class="container">
            <div class="box">
                <div class="row">
                    <div class=" col-md-offset- col-md-6 heading">
                        <b>Discover Youself </b>
                    </div>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Career</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-padding">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/food_scientist.jpg') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Food Scientist</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                    <img src="{{ asset('img/env_scientist.png') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center">Environment Scientist</p>
                                </div>
                                <div class="col-md-offset-1 col-md-2">
                                    <img src="{{ asset('img/hr-manager.png') }}" class="img-responsive" alt="engineering">
                                    <p style="text-align: center; margin-left: 5rem">H.R. Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Overview</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <p> You are gentle, caring, complex and highly intuitive individuals. Artistic and creative,
                                you live in a world of hidden meanings and possibilities. Only one percent of the
                                population has your Personality Type, making it the most rare of all the types.

                                You place great importance on havings things orderly and systematic in their outer
                                world. You put a lot of energy into identifying the best system for getting things done,
                                and constantly define and re-define the priorities in their lives. On the other hand,
                                you operate within yourself on an intuitive basis which is entirely spontaneous. They
                                know things intuitively, without being able to pinpoint why, and without detailed
                                knowledge of the subject at hand. You are usually right, and they usually know it. </p>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Stength</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">

                            <ul>
                                <li>
                                    <p><b>Curious</b> – Imaginative and open-minded, see all things as part of a big,
                                        mysterious puzzle called life.</p>
                                </li>
                                <li>
                                    <p><b> Observant</b> – To satisfy your curiosity, you try to notice every move and
                                        every idea, and never miss a moment. </p>
                                </li>
                                <li>
                                    <p><b>Energetic and Enthusiastic </b> – Enthusiasm has the dual benefit of giving
                                        you a chance to make more social connections, and of giving you a new source of
                                        information and experience</p>
                                </li>
                                <li>
                                    <p><b>Excellent Communicators</b> – You enjoy small talk and deep, meaningful
                                        conversations and adept at steering conversations towards your desired subjects.
                                    </p>
                                </li>
                                <li>
                                    <p><b>Know How to Relax </b> –You know that sometimes, nothing is as important as
                                        simply having fun and experiencing life’s joys. That Intuitive trait can let you
                                        know that it’s time to shake things up.</p>
                                </li>
                                <li>
                                    <p><b>Very Popular and Friendly </b> –You are a person who is approachable,
                                        interesting and exciting, with a cooperative and altruistic spirit and friendly,
                                        empathetic disposition. </p>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3 text-padding">
                            <li>
                                <p style="font-size: 2rem; font-weight: 500"> Your Weakness</p>
                            </li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-padding ">
                            <ul>
                                <li>
                                    <p><b>Poor Practical Skills </b> - Your main reliance on your ideas can result in
                                        struggles throughout your projects.</p>
                                </li>
                                <li>
                                    <p><b>Find it Difficult to Focus </b> – It’s hard for you to maintain interest as
                                        tasks drift towards routine, administrative matters, and away from broader
                                        concepts. </p>
                                </li>
                                <li>
                                    <p><b>Over think Things </b> – You don’t take things at face value –you look for
                                        underlying motives in even the simplest things.</p>
                                </li>

                            </ul>

                        </div>
                    </div>

                </ul>


            </div>
        </div>
    @endif
@endsection()