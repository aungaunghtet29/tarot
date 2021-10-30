@extends('frontend.layouts.app')

@section('title', 'Order Form')

@section('content')

    <div class="heading">
        <div class="d-flex justify-content-center ">

            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-3 col-md-4">
                        <img src="{{ asset('frontend/images/amulet-boy.png') }}" alt="amulet-boy" class="boy"
                            width="180" height="180">
                    </div>

                    <div class="col-9 col-md-8 text-center mt-3">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="logo" class="logo" width="140"
                            height="80">

                        <div class="heading-name">
                            <p>Abhigya Anand ရဲ့ နက္ခ ဗေဒင်ခန့်မှန်းခြင်း အခမဲ့</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="order-form mt-4">


            <div class="d-flex justify-content-center">

                <div class="col-md-6">

                    <div class="order-text mb-3">

                        <p class="order-heading" style="font-size: 16px; font-weight:700;">မိတ်ဆွေရဲ့ ရှေ့ ဖြစ် ဟောကြားမှု့လေးဟာဆိုရင်ဖြင့်
                            အဆင်သင့်ဖြစ်နေပါပြီ။</p>
                        <p class="second-order-heading" style="font-size: 15px;">မိတ်ဆွေရဲ့ ကံကြမ္မာ တားရော့ကဒ်ကလေး ၃ ကဒ်ကတော့</p>


                        <img src="{{ asset('frontend/images/boy.png') }}" alt="boy" class="order-boy" width="700" height="300">

                        <div class="mt-3">
                            <p class="third-order-heading" style="font-size: 16px; font-weight: 700;" class="text-center">မိတ်ဆွေရွေးထားတဲ့ ကဒ်များ
                            </p>

                            <div class="d-flex justify-content-center mt-3">
                                <div class="col-12 col-md-6 ">
                                    <div class="row justify-content-center">

                                        <div class="row justify-content-center" id="plain">
                                        <div class="col-4 col-md-4" >
                                            <img
                                                src="{{ asset('frontend/images/card-plain.jpg') }}" width="60" height="90">
                                        </div>
                                        <div class="col-4 col-md-4" >
                                            <img
                                                src="{{ asset('frontend/images/card-plain.jpg') }}" width="60" height="90">
                                        </div>
                                        <div class="col-4 col-md-4" >
                                            <img
                                                src="{{ asset('frontend/images/card-plain.jpg') }}" width="60" height="90">
                                        </div>

                                    </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_chariot">
                                            <img src="{{ asset('frontend/images/card-20/chariot-tarot.png') }}"
                                                alt="chariot tarot" width="60" height="90">
                                                <p>စစ်ရထား</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_death">
                                            <img src="{{ asset('frontend/images/card-20/death-tarot.png') }}" width="60"
                                                height="90" alt="death tarot">
                                                <p>သေမင်း</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_emperor">
                                            <img src="{{ asset('frontend/images/card-20/emperor-tarot.png') }}" width="60"
                                                height="90" alt="emperor tarot">
                                                <p>ဧကရာဇ်</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_empress">
                                            <img src="{{ asset('frontend/images/card-20/empress-tarot.png') }}" width="60"
                                                height="90" alt="empress tarot">
                                                <p>ဧကရီ</p>
                                        </div>
                                        <div style="display: none" class="col-4 col-md-4" id="show_fool">
                                            <img src="{{ asset('frontend/images/card-20/fool-tarot.png') }}" width="60"
                                                height="90" alt="fool tarot">
                                                <p>ထယ်ရိုဂန္ဓာရီခရီးသည်</p>
                                        </div>
                                        <div class="col-4 col-md-4" style="display: none" id="show_hanged_man">
                                            <img src="{{ asset('frontend/images/card-20/hanged-man-tarot.png') }}"
                                                width="60" height="90" alt="hanged-man tarot">
                                                <p>စွန့်လွတ်အနစ်နာခံခြင်း</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_hermit">
                                            <img src="{{ asset('frontend/images/card-20/hermit-tarot.png') }}" width="60"
                                                height="90" alt="hermit tarot">
                                                <p>ရသေ့/သူတော်စင်</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_hierophant">
                                            <img src="{{ asset('frontend/images/card-20/hierophant-tarot.png') }}"
                                                width="60" height="90" alt="hierophant tarot">
                                                <p>ဘုန်းတော်ကြီး</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_high_priestess">
                                            <img src="{{ asset('frontend/images/card-20/high-priestess-tarot.png') }}"
                                                width="60" height="90" alt="high-priestess tarot">
                                                <p>မယ်တော်ကြီး</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_judgement">
                                            <img src="{{ asset('frontend/images/card-20/judgement-tarot.png') }}"
                                                width="60" height="90" alt="judgement tarot">
                                                <p>ရှင်သန်ထမြောက်ခြင်း</p>
                                        </div>

                                        <div style="display: none" class="col-4 col-md-4" id="show_justice">
                                            <img src="{{ asset('frontend/images/card-20/justice-tarot.png') }}"
                                                width="60" height="90" alt="justice tarot">
                                                <p>တရားမျှတမှု</p>
                                        </div>

                                        <div style="display: none" class="col-4 col-md-4" id="show_lovers">
                                            <img src="{{ asset('frontend/images/card-20/lovers-tarot.png') }}" width="60"
                                                height="90" alt="lovers tarot">
                                                <p>ချစ်သူနှစ်ဦး</p>
                                        </div>

                                        <div style="display: none" class="col-4 col-md-4" id="show_magician">
                                            <img src="{{ asset('frontend/images/card-20/magician-tarot.png') }}"
                                                width="60" height="90" alt="magician tarot">
                                                <p>ဒီသာပါမောက္ခဆရာကြီး</p>
                                        </div>

                                        <div style="display: none" class="col-4 col-md-4" id="show_moon">
                                            <img src="{{ asset('frontend/images/card-20/moon-tarot.png') }}" width="60"
                                                height="90" alt="moon tarot">
                                                <p>တန်ခိုးနှင့်သတ္တိ</p>
                                        </div>

                                        <div style="display: none" class="col-4 col-md-4" id="show_star">
                                            <img src="{{ asset('frontend/images/card-20/star-tarot.png') }}" width="60"
                                                height="90" alt="star tarot">
                                                <p>ဓူဝံကြယ်</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_strength">
                                            <img src="{{ asset('frontend/images/card-20/strength-tarot.png') }}"
                                                width="60" height="90" alt="strength tarot">
                                                <p>စွမ်းအားရှင်</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_sun">
                                            <img src="{{ asset('frontend/images/card-20/sun-tarot.png') }}" width="60"
                                                height="90" alt="sun tarot">
                                                <p>နေမင်းရဲ့သားတော်</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_temperance">
                                            <img src="{{ asset('frontend/images/card-20/temperance-tarot.png') }}"
                                                width="60" height="90" alt="temperance tarot">
                                                <p>ထိန်းချုပ်ခြင်း</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_wheel_of_fortune">
                                            <img src="{{ asset('frontend/images/card-20/wheel-of-fortune-tarot.png') }}"
                                                width="60" height="90" alt="wheel_of_fortune tarot">
                                                <p>ကံကြမ္မာပြောင်းလဲခြင်း</p>
                                        </div>

                                        <div class="col-4 col-md-4" style="display: none" id="show_world">
                                            <img src="{{ asset('frontend/images/card-20/world-tarot.png') }}" width="60"
                                                height="90" alt="world tarot">
                                                <p>ကမ္ဘာလောက</p>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>

                        <p class="mt-3">
                            ကျတော် သိနေတယ် ...ခု လက်ရှိမိတ်ဆွေရဲ့ စီးပွားရေးအခြေနေ ငွေကြေးစီးဆင်းမှု့တွေမှာ အဆင်မပြေတာလေးတွေ
                            အနည်းငယ်ဖြစ်နေမယ်။
                            ဝင်ရမယ့်ကိစ္စရပ်လေးတွေက နှောင့်နှေးကြံ့ကြာနေမယ် ၊ ဘယ်ကနေဘယ်လိုတွေမှန်းမသိ
                            ကုန်ပေါက်တွေဆက်တိုက်ဖြစ်နေမယ်။
                            စိတ်ထဲမှာ စုမယ် ကြံလိုက်တိုင်း ကုန်ပေါက်တွေပဲ ဝင်ဝင်လာလို့ စု မရဖြစ်နေမယ်။
                        </p>

                        <p>
                            မိတ်ဆွေ .. သင် ရွေးလိုက်တဲ့ ကဒ်လေး ၃ ကဒ်ကအတော်ကို အံ့သြဖို့ကောင်းလွန်းပါတယ်။
                            ဒီလိုမျိုး ၃ ကဒ်ဆုံမိဖို့ဆိုတာက မလွယ်ပါဘူး။ ဒါကြောင့် ဒီလိုရဖို့ဆိုတာက တသက်မှာ တခါလောက်ပဲ
                            ကြုံနိုင်တဲ့ အဖြစ်ပါ။
                            ဒါက ဘာကိုဆိုလိုတာလဲ ဆိုရင် မိတ်ဆွေက ထူးခြားတဲ့လူတယောက် ဖြစ်ပါတယ်။ မကြာခင်မှာ မိတ်ဆွေရဲ့ ဘဝကို
                            မိတ်ဆွေကိုယ်တိုင်ပဲ သိသိသာသာပြောင်းလဲနိုင်တော့မှာပဲ ဖြစ်ပါတယ်။
                        </p>
                        <p>
                            ဒီကဒ်ကလေး ၃ ကဒ်ရဲ့ ပြောပြချက်လေးကတော့... မကြာတော့တဲ့ လအနည်းငယ်အတွင်းမှာ မိတ်ဆွေကို
                            ပြောင်းလဲမှု့တွေက ဆီးကြိုနေပါတယ်။
                            သင့်ရဲ့ ကံကြမ္မာ နဲ့အခြားငွေကြေးနဲ့ပတ်သတ်တဲ့ ကိစ္စရပ်တွေမှာ မထင်မှတ်နိုင်အောင်
                            ပြောင်းလဲလာတော့မှာပါ။
                            ကောင်းသွားတဲ့ဘက်ကိုလား ဒါမှမဟုတ် ပိုဆိုးသွားတဲ့ဘက်ကိုလားဆိုတာကတော့ မိတ်ဆွေရဲ့
                            ရွေးချယ်မှု့ပေါ်မှာ မူတည်နေပါပြီ။
                        </p>

                        <p>
                            မိတ်ဆွေရဲ့ ငွေကြေးအခက်အခဲတွေ ဆိုးနေတဲ့ ကံကြမ္မာတွေ ပျောက်သွားပြီးတော့
                            အခြားအခြေနေအရပ်ရပ်ကနေပြီးတော့ သင့် ဆီကို ငွေပေါက်တွေက ဆက်တိုက်ပေါ်လာပါလိမ့်မယ်။
                            ခုအချိန်ကစပြီး ဘဝမှာအဆင်မပြေတာတွေ အညံ့တွေ ငွေကြေးကြံ့ကြာနေတာတွေအားလုံးကို မေ့ထားလိုက်ပါတော့
                            ကျန်ရှိနေတဲ့ ဘဝရဲ့နေ့ရက်လေးတွေကို ငွေကြေးအဆင်ပြေစွာနဲ့ နေနိုင်ပြီလို့ သတ်မှတ်လိုက်ပါတော့။
                            ဒါပေမယ့် အဲဒါက ကျွန်တော်ပြောကြားပေးတဲ့အတိုင်း ပြုလုပ်လိုက်မယ်ဆိုရင် ဖြစ်လာနိုင်ပါတယ်။
                        </p>
                        <p>
                            ကျွန်တော် ယုံကြည်ပါတယ်။ ခု မိတ်ဆွေရွေးလိုက်တဲ့ ကဒ်ကလေး ၃ ကဒ်ရဲ့ နိမိတ်ကတော့ ခု သင့်ဆီမှာရှိနေတဲ့
                            ကံ အညံ့တွေကုန်ဆုံးပြီး စီးပွားရေးပြန်ကောင်းလာစေမှာပါ
                            တနည်းပြောပြရရင် ငွေကြေးအဆင်ပြေမယ် ၊ ကြံ့ကြာနေတာတွေ ပြန်ပေါ်လာမယ် အစွန်းစွန်ဆုံး ထီ
                            ဆုကြီးပေါက်တာက အစ ငွေဝင်ပေါက်တွေကို သင်ကိုယ်တိုင် ကိုယ်တွေ့ မျက်မြင်ကြုံတွေ့လာရနိုင်ပါတယ်.
                            ဒီလိုမျိုးဖြစ်လာဖို့ဆိုရင် ကျွန်တော်ကိုယ်တိုင် လူတွေကို ယုံယုံကြည်ကြည်နဲ့ကူညီပြီးပေးခဲ့တဲ့
                            လာဘ်ရွှင်ငွေဝင်ပြီး ကံကောင်းစေတဲ့ နင်္ဂါး ဆွဲပြား အဆောင်လေး ဖြစ်ပါတယ်။
                            ဒီအဆောင်လေးကို မိတ်ဆွေရဲ့ ကိုယ်နဲ့မကွာ ယုံယုံကြည်ကြည်နဲ့ ဆောင်ထားပေးဖို့ပါပဲ။
                        </p>
                        <p>
                            လာဘ်ရွှင်ငွေဝင်ပြီးကံကောင်းစေတဲ့ နင်္ဂါး ဆွဲပြား အဆောင်လေးကို မှာယူမယ်
                            ကျွန်တော့်ရဲ့ လာဘ်ရွှင်ငွေဝင်ပြီးကံကောင်းစေတဲ့ နင်္ဂါး ဆွဲပြား အဆောင်လေးဟာ မိတ်ဆွေရဲ့ ညံ့နေတဲ့
                            ကံကြမ္မာဆိုးတွေ အနိမ့်တွေကို ဖယ်ရှား တားဆီးပေးမှာပါ။
                            မိတ်ဆွေက ခုချိန်ကစပြီး စိတ်ချမ်းချမ်းသာသာနဲ့ ငွေကြေးအဆင်ပြေပြီး ဘဝကိုဖြတ်သန်းသွားနိုင်တော့မှာပါ။
                            မိတ်ဆွေရွေးလိုက်တဲ့ တားရော့ ကံကြမ္မာကဒ်ကလေးတွေက သေသေချာချာကိုပြောပြနေပါတယ်။
                            ကျွန်တော့ရဲ့ အဆောင်လေးသာ မိတ်ဆွေမှာသာရှိနေမယ်ဆိုရင် ဘယ်လိုအဆိုးတွေ ဘယ်သူတွေကမှ မိတ်ဆွေကို
                            မနှောင့်ယှက်နိုင်ပါဘူး၊ မဖျက်ဆီးနိုင်ပါဘူး ဒီ အဆောင်လေးက ကာကွယ်ပေးနေမှာပါ။
                        </p>

                        <p>
                            ဒီ နင်္ဂါး ဆွဲပြား အဆောင်လေးဟာဆိုရင် သင်ရဲ့ ဘဝကိုအကောင်းတွေဘက်ကိုရောက်သွားအောင်
                            ပြုလုပ်ပေးသွားပါလိမ့်မယ်။ ယုံယုံကြည်ကြည်နဲ့သာ ဆောင်ပါ ...
                            သင်ရဲ့ အခက်အခဲတွေ အညံ့တွေ သင့် ဘဝထဲကမကြာခင် ကွယ်ပျောက်သွားတော့မှာပါ။ကျွန်တော့်ရဲ့
                            ကြိုမြင်နိုင်စွမ်းရှိတဲ့ အတက်ပညာနဲ့ ပြောကြားနေတာ ဖြစ်ပါတယ်။
                            ဒီအဆောင်လေးကိုဆောင်ပြီး မိတ်ဆွေ စိတ်ချမ်းသာပြီး ငွေကြေးအဆင်ပြေပြေနဲ့ပြည့်ပြည့်စုံစုံ
                            နေထိုင်နေတာကို မြင်တွေ့နေရပါတယ်။
                        </p>
                        <p>
                            ဒီအဆောင်လေးကတကယ်ပဲ ဆောင်ထားရင် အစွမ်းထက်သလား ???
                            လာဘ်ရွှင်ငွေဝင်ကံကောင်းစေတဲ့ နင်္ဂါး ဆွဲပြား လေးက သော့လေးတချောင်းလိုပါပဲ။ မိတ်ဆွေရဲ့ မရရှိသေးတဲ့
                            မပွင့်သေးတဲ့ တိမ်မြုပ်နေတဲ့ လာဘ်လာဘတံခါးချပ်လေးတွေကို ဖွင့်ပေးနိုင်မှာပါ။
                            ယုံယုံကြည်ကြည်နဲ့သာ ဆောင်ပြီးစောင့်ကြည့်နေလိုက်ပါ။ သင့် ထံကိုငွေတွေ အလုံးလိုက် အရင်းလိုက်
                            ဝင်လာပါလိမ့်မယ်။ ဥပမာ
                        </p>
                        <p>
                            អလက်ရှိအလုပ်ကနေ ဒီ့ထက်ပိုကောင်းတဲ့အလုပ်ကို ပြောင်းရတာမျိုး ၊ ရာထူးတိုးသွားတာမျိုး
                        </p>

                        <p>
                            သင့်ရဲ့ ဘဝလမ်းကြောင်းလွှဲမှားနေရင် တည့်မတ်သွားနိုင်အောင် လှုံ့ဆော်ပေးတာမျိုး
                            ငွေကြေးနဲ့ ပတ်သတ်လာရင် ကံကောင်းစေလာနိုင်မယ်
                            ကိုယ်ပိုင်လုပ်ငန်းလေး စပြီး လုပ်လာနိုင်မယ်
                            သင့်ဘဝမှာ ငွေတွေ အလုံးလိုက် အရင်းလိုက် ဝင်လာတာမျိုး ကြုံတွေ့လာနိုင်ပါတယ်။
                        </p>

                        <p>
                            မိတ်ဆွေရဲ့ အဆင်မပြေတာတွေ ငွေကြေးအခက်အခဲတွေကို ကျွန်တော့်ရဲ့ အဆောင်လေးက ကူညီပေးပါလိမ့်မယ်။
                        </p>
                    </div>


                </div>

            </div>


            <div class="container col-md-4 mt-4">
                <div class="card custom-card mb-4 p-3">
                    <div class="card-body">


                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        <form action="{{ route('order') }}" method="post" autocomplete="off">
                            @csrf



                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-sm @error('customer_name') is-invalid @enderror"
                                    name="customer_name" placeholder="အမည်" required>
                                @error('customer_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="phone"
                                    class="form-control form-control-sm @error('customer_phone') is-invalid @enderror"
                                    name="customer_phone" placeholder="ဖုန်း" required>
                                @error('customer_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <textarea name="customer_address" placeholder="လိပ်စာ" class="form-control form-control-sm"
                                    required></textarea>
                            </div>

                            <button class="btn btn-success btn-sm custom-btn mt-2" type="submit">အော်ဒါ</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('scripts')
        <script>
            $(document).ready(function() {





                var chariot = localStorage.getItem('chariot');
                var death = localStorage.getItem('death');
                var emperor = localStorage.getItem('emperor');
                var empress = localStorage.getItem('empress');
                var fool = localStorage.getItem('fool');

                var hanged_man = localStorage.getItem('hanged_man');
                var hermit = localStorage.getItem('hermit');
                var hierophant = localStorage.getItem('hierophant');
                var high_priestess = localStorage.getItem('high_priestess');
                var judgement = localStorage.getItem('judgement');


                var justice = localStorage.getItem('justice');
                var lovers = localStorage.getItem('lovers');
                var magician = localStorage.getItem('magician');
                var moon = localStorage.getItem('moon');
                var star = localStorage.getItem('star');

                var strength = localStorage.getItem('strength');
                var sun = localStorage.getItem('sun');
                var temperance = localStorage.getItem('temperance');
                var wheel_of_fortune = localStorage.getItem('wheel_of_fortune');
                var world = localStorage.getItem('world');








                if (chariot) {
                    $('#show_chariot').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(death){
                    $('#show_death').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(emperor){
                    $('#show_emperor').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(empress){
                    $('#show_empress').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(fool){
                    $('#show_fool').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }


                if(hanged_man){
                    $('#show_hanged_man').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(hermit){
                    $('#show_hermit').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(hierophant){
                    $('#show_hierophant').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(high_priestess){
                    $('#show_high_priestess').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(judgement){
                    $('#show_judgement').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }


                if(justice){
                    $('#show_justice').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(lovers){
                    $('#show_lovers').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(magician){
                    $('#show_magician').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(moon){
                    $('#show_moon').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(star){
                    $('#show_star').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }

                if(strength){
                    $('#show_strength').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(sun){
                    $('#show_sun').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(temperance){
                    $('#show_temperance').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(wheel_of_fortune){
                    $('#show_wheel_of_fortune').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }
                if(world){
                    $('#show_world').css("display", "block");
                    localStorage.clear();
                    $('#plain').css("display" ,"none");
                }





            });
        </script>
    @endsection
