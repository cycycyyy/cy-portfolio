@extends('master-layout')
@section('content')
@section('title', 'cy. | Home')

<div class="container" style="padding-top: 120px;">
    <div class="heading-title" style="border-left: 4px solid #F4F4F4;">
        <span class="display-4 text-white-mod px-3">About <strong style="font-weight: 700;">Cy.</strong></span>
    </div>
    <div class="d-md-flex flex-row-reverse justify-content-between align-items-center py-5 gap-3">
        <div class="w-100 w-md-50" style="height: 60vh;">
            <img src="{{ URL::asset('imgs/Portrait-2.jpg') }}" alt=""
                class="img-cover" style="border-top: 3px solid #718238;">
        </div>
        <div class="w-100 w-md-50 py-3 h6" style="letter-spacing: 1px; line-height: 23px;">
            <div class="text-white-mod"><span>Hi, I'm Jon Cyrel Somera. But you can simply call me Cy. I'm a self-taught graphic designer ever since I was in my high school years. I've started from creating simple collage photos, casual photography, doing cut-to-cut video compilations, and now I'm here.</span></div>
            <div class="text-white-mod py-3"><span>I specialize in creating effective photo and video advertisements for online or offline purpose, utilizing different resources or tools such as Illustrator, Photoshop, Premiere Pro, and the like.</span></div>
            <div class="d-flex gap-3">
                <img src="{{URL::asset('imgs/assets/Photoshop-Logo.png')}}" alt="Photoshop" width="50">
                <img src="{{URL::asset('imgs/assets/Illustrator-Logo.png')}}" alt="Illustrator" width="50">
                <img src="{{URL::asset('imgs/assets/PremierePro-Logo.png')}}" alt="Premiere Pro" width="50">
                <img src="{{URL::asset('imgs/assets/Canva-Logo.png')}}" alt="Canva" width="50">
            </div>
            <div class="text-white-mod py-3"><span>I do also website development! Though I am currently still in the learning process, but my ultimate goal is to become a Full Stack Developer and develop a passion project someday.</span></div>
            <div class="text-white-mod py-3"><span>If you think we could work on something awesome, feel free to <a href="mailto:somerajoncyrel1@gmail.com" style="font-weight: 600; color:#718238;">shoot me an email!</a> </a></span></div>
        </div>
    </div>
    <div class="bg-light-mod py-4 my-4 cv-wrapper">
        <div class="d-flex align-items-center justify-content-between px-4 gap-3">
            <span class="text-green h3" style="font-weight: 700;">Check my CV?</span>
            <button class="btn btn-warning" id="download-cv"><i class="mdi mdi-download"></i> Download here</button>
        </div>
    </div>
</div>

<script>
document.getElementById("download-cv").addEventListener("click", downloadFile);
function downloadFile() {
  var fileName = "Jon Cyrel C. Somera-CV.pdf";
  var filePath = "{{URL::asset('files/Jon Cyrel C. Somera_CV.pdf')}}";
  var link = document.createElement("a");
  link.download = fileName;
  link.href = filePath;
  link.click();
}
</script>

@endsection