//\//////////////////////////////////////////////////////////////////////////////////
//\  overLIB 3.51  --  This notice must remain untouched at all times.
//\  Copyright Erik Bosrup 1998-2002. All rights reserved.
//\
//\  By Erik Bosrup (erik@bosrup.com).  Last modified 2002-11-01.
//\  Portions by Dan Steinman (dansteinman.com). Additions by other people are
//\  listed on the overLIB homepage.
//\
//\  Get the latest version at http://www.bosrup.com/web/overlib/
//\
//\  This script is published under an open source license. Please read the license
//\  agreement online at: http://www.bosrup.com/web/overlib/license.html
//\  If you have questions regarding the license please contact erik@bosrup.com.
//\
//\  This script library was originally created for personal use. By request it has
//\  later been made public. This is free software. Do not sell this as your own
//\  work, or remove this copyright notice. For full details on copying or changing
//\  this script please read the license agreement at the link above.
//\
//\  Please give credit on sites that use overLIB and submit changes of the script
//\  so other people can use them as well. This script is free to use, don't abuse.
//\//////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
// modified version by René Fritz <r.fritz@colorcube.de>
// encapsulated the script in a class like var to move it out of the global namespace
////////////////////////////////////////////////////////////////////////////////////
var INARRAY=1;
var CAPARRAY=2;
var STICKY=3;
var BACKGROUND=4;
var NOCLOSE=5;
var CAPTION=6;
var LEFT=7;
var RIGHT=8;
var CENTER=9;
var OFFSETX=10;
var OFFSETY=11;
var FGCOLOR=12;
var BGCOLOR=13;
var TEXTCOLOR=14;
var CAPCOLOR=15;
var CLOSECOLOR=16;
var WIDTH=17;
var BORDER=18;
var STATUS=19;
var AUTOSTATUS=20;
var AUTOSTATUSCAP=21;
var HEIGHT=22;
var CLOSETEXT=23;
var SNAPX=24;
var SNAPY=25;
var FIXX=26;
var FIXY=27;
var FGBACKGROUND=28;
var BGBACKGROUND=29;
var PADX=30; // PADX2 out
var PADY=31; // PADY2 out
var FULLHTML=34;
var ABOVE=35;
var BELOW=36;
var CAPICON=37;
var TEXTFONT=38;
var CAPTIONFONT=39;
var CLOSEFONT=40;
var TEXTSIZE=41;
var CAPTIONSIZE=42;
var CLOSESIZE=43;
var FRAME=44;
var TIMEOUT=45;
var FUNCTION=46;
var DELAY=47;
var HAUTO=48;
var VAUTO=49;
var CLOSECLICK=50;
var CSSOFF=51;
var CSSSTYLE=52;
var CSSCLASS=53;
var FGCLASS=54;
var BGCLASS=55;
var TEXTFONTCLASS=56;
var CAPTIONFONTCLASS=57;
var CLOSEFONTCLASS=58;
var PADUNIT=59;
var HEIGHTUNIT=60;
var WIDTHUNIT=61;
var TEXTSIZEUNIT=62;
var TEXTDECORATION=63;
var TEXTSTYLE=64;
var TEXTWEIGHT=65;
var CAPTIONSIZEUNIT=66;
var CAPTIONDECORATION=67;
var CAPTIONSTYLE=68;
var CAPTIONWEIGHT=69;
var CLOSESIZEUNIT=70;
var CLOSEDECORATION=71;
var CLOSESTYLE=72;
var CLOSEWEIGHT=73;
var overlib={
init: function(){

if (typeof this.ol_fgcolor=='undefined'){this.ol_fgcolor="#CCCCFF";}
if (typeof this.ol_bgcolor=='undefined'){this.ol_bgcolor="#333399";}
if (typeof this.ol_textcolor=='undefined'){this.ol_textcolor="#000000";}
if (typeof this.ol_capcolor=='undefined'){this.ol_capcolor="#FFFFFF";}
if (typeof this.ol_closecolor=='undefined'){this.ol_closecolor="#9999FF";}
if (typeof this.ol_textfont=='undefined'){this.ol_textfont="Verdana,Arial,Helvetica";}
if (typeof this.ol_captionfont=='undefined'){this.ol_captionfont="Verdana,Arial,Helvetica";}
if (typeof this.ol_closefont=='undefined'){this.ol_closefont="Verdana,Arial,Helvetica";}
if (typeof this.ol_textsize=='undefined'){this.ol_textsize="1";}
if (typeof this.ol_captionsize=='undefined'){this.ol_captionsize="1";}
if (typeof this.ol_closesize=='undefined'){this.ol_closesize="1";}
if (typeof this.ol_width=='undefined'){this.ol_width="200";}
if (typeof this.ol_border=='undefined'){this.ol_border="1";}
if (typeof this.ol_offsetx=='undefined'){this.ol_offsetx=10;}
if (typeof this.ol_offsety=='undefined'){this.ol_offsety=10;}
if (typeof this.ol_text=='undefined'){this.ol_text="Default Text";}
if (typeof this.ol_cap=='undefined'){this.ol_cap="";}
if (typeof this.ol_sticky=='undefined'){this.ol_sticky=0;}
if (typeof this.ol_background=='undefined'){this.ol_background="";}
if (typeof this.ol_close=='undefined'){this.ol_close="Close";}
if (typeof this.ol_hpos=='undefined'){this.ol_hpos=RIGHT;}
if (typeof this.ol_status=='undefined'){this.ol_status="";}
if (typeof this.ol_autostatus=='undefined'){this.ol_autostatus=0;}
if (typeof this.ol_height=='undefined'){this.ol_height=-1;}
if (typeof this.ol_snapx=='undefined'){this.ol_snapx=0;}
if (typeof this.ol_snapy=='undefined'){this.ol_snapy=0;}
if (typeof this.ol_fixx=='undefined'){this.ol_fixx=-1;}
if (typeof this.ol_fixy=='undefined'){this.ol_fixy=-1;}
if (typeof this.ol_fgbackground=='undefined'){this.ol_fgbackground="";}
if (typeof this.ol_bgbackground=='undefined'){this.ol_bgbackground="";}
if (typeof this.ol_padxl=='undefined'){this.ol_padxl=1;}
if (typeof this.ol_padxr=='undefined'){this.ol_padxr=1;}
if (typeof this.ol_padyt=='undefined'){this.ol_padyt=1;}
if (typeof this.ol_padyb=='undefined'){this.ol_padyb=1;}
if (typeof this.ol_fullhtml=='undefined'){this.ol_fullhtml=0;}
if (typeof this.ol_vpos=='undefined'){this.ol_vpos=BELOW;}
if (typeof this.ol_aboveheight=='undefined'){this.ol_aboveheight=0;}
if (typeof this.ol_capicon=='undefined'){this.ol_capicon="";}
if (typeof this.ol_frame=='undefined'){this.ol_frame=self;}
if (typeof this.ol_timeout=='undefined'){this.ol_timeout=0;}
if (typeof this.ol_function=='undefined'){this.ol_function=null;}
if (typeof this.ol_delay=='undefined'){this.ol_delay=0;}
if (typeof this.ol_hauto=='undefined'){this.ol_hauto=0;}
if (typeof this.ol_vauto=='undefined'){this.ol_vauto=0;}
if (typeof this.ol_closeclick=='undefined'){this.ol_closeclick=0;}
if (typeof this.ol_css=='undefined'){this.ol_css=CSSOFF;}
if (typeof this.ol_fgclass=='undefined'){this.ol_fgclass="";}
if (typeof this.ol_bgclass=='undefined'){this.ol_bgclass="";}
if (typeof this.ol_textfontclass=='undefined'){this.ol_textfontclass="";}
if (typeof this.ol_captionfontclass=='undefined'){this.ol_captionfontclass="";}
if (typeof this.ol_closefontclass=='undefined'){this.ol_closefontclass="";}
if (typeof this.ol_padunit=='undefined'){this.ol_padunit="px";}
if (typeof this.ol_heightunit=='undefined'){this.ol_heightunit="px";}
if (typeof this.ol_widthunit=='undefined'){this.ol_widthunit="px";}
if (typeof this.ol_textsizeunit=='undefined'){this.ol_textsizeunit="px";}
if (typeof this.ol_textdecoration=='undefined'){this.ol_textdecoration="none";}
if (typeof this.ol_textstyle=='undefined'){this.ol_textstyle="normal";}
if (typeof this.ol_textweight=='undefined'){this.ol_textweight="normal";}
if (typeof this.ol_captionsizeunit=='undefined'){this.ol_captionsizeunit="px";}
if (typeof this.ol_captiondecoration=='undefined'){this.ol_captiondecoration="none";}
if (typeof this.ol_captionstyle=='undefined'){this.ol_captionstyle="normal";}
if (typeof this.ol_captionweight=='undefined'){this.ol_captionweight="bold";}
if (typeof this.ol_closesizeunit=='undefined'){this.ol_closesizeunit="px";}
if (typeof this.ol_closedecoration=='undefined'){this.ol_closedecoration="none";}
if (typeof this.ol_closestyle=='undefined'){this.ol_closestyle="normal";}
if (typeof this.ol_closeweight=='undefined'){this.ol_closeweight="normal";}

if (typeof this.ol_texts=='undefined'){this.ol_texts=new Array("Text 0", "Text 1");}
if (typeof this.ol_caps=='undefined'){this.ol_caps=new Array("Caption 0", "Caption 1");}

this.o3_text="";
this.o3_cap="";
this.o3_sticky=0;
this.o3_background="";
this.o3_close="Close";
this.o3_hpos=RIGHT;
this.o3_offsetx=2;
this.o3_offsety=2;
this.o3_fgcolor="";
this.o3_bgcolor="";
this.o3_textcolor="";
this.o3_capcolor="";
this.o3_closecolor="";
this.o3_width=100;
this.o3_border=1;
this.o3_status="";
this.o3_autostatus=0;
this.o3_height=-1;
this.o3_snapx=0;
this.o3_snapy=0;
this.o3_fixx=-1;
this.o3_fixy=-1;
this.o3_fgbackground="";
this.o3_bgbackground="";
this.o3_padxl=0;
this.o3_padxr=0;
this.o3_padyt=0;
this.o3_padyb=0;
this.o3_fullhtml=0;
this.o3_vpos=BELOW;
this.o3_aboveheight=0;
this.o3_capicon="";
this.o3_textfont="Verdana,Arial,Helvetica";
this.o3_captionfont="Verdana,Arial,Helvetica";
this.o3_closefont="Verdana,Arial,Helvetica";
this.o3_textsize="1";
this.o3_captionsize="1";
this.o3_closesize="1";
this.o3_frame=self;
this.o3_timeout=0;
this.o3_timerid=0;
this.o3_allowmove=0;
this.o3_function=null; 
this.o3_delay=0;
this.o3_delayid=0;
this.o3_hauto=0;
this.o3_vauto=0;
this.o3_closeclick=0;
this.o3_css=CSSOFF;
this.o3_fgclass="";
this.o3_bgclass="";
this.o3_textfontclass="";
this.o3_captionfontclass="";
this.o3_closefontclass="";
this.o3_padunit="px";
this.o3_heightunit="px";
this.o3_widthunit="px";
this.o3_textsizeunit="px";
this.o3_textdecoration="";
this.o3_textstyle="";
this.o3_textweight="";
this.o3_captionsizeunit="px";
this.o3_captiondecoration="";
this.o3_captionstyle="";
this.o3_captionweight="";
this.o3_closesizeunit="px";
this.o3_closedecoration="";
this.o3_closestyle="";
this.o3_closeweight="";
this.o3_x=0;
this.o3_y=0;
this.o3_allow=0;
this.o3_showingsticky=0;
this.o3_removecounter=0;
this.over=null;
this.fnRef;
this.ns4=(navigator.appName=='Netscape' && parseInt(navigator.appVersion)==4);
this.ns6=(document.getElementById)? true:false;
this.ie4=(document.all)? true:false;
if (this.ie4) this.docRoot='document.body';
this.ie5=false;
if (this.ns4){
this.oW=window.innerWidth;
this.oH=window.innerHeight;
window.onresize=function (){if (this.oW!=window.innerWidth||this.oH!=window.innerHeight) location.reload();}
}
if (this.ie4){
if ((navigator.userAgent.indexOf('MSIE 5') > 0)||(navigator.userAgent.indexOf('MSIE 6') > 0)){
if(document.compatMode && document.compatMode=='CSS1Compat') this.docRoot='document.documentElement';
this.ie5=true;
}
if (this.ns6){
this.ns6=false;
}
}
if ( (this.ns4)||(this.ie4)||(this.ns6)){
if (this.ns4) document.captureEvents(Event.MOUSEMOVE)
}else{
this.ov=this.no_overlib;
this.nd=this.no_overlib;
this.ver3fix=true;
}
},
no_overlib: function(){
return this.ver3fix;
},

ov: function(){
this.o3_text=this.ol_text;
this.o3_cap=this.ol_cap;
this.o3_sticky=this.ol_sticky;
this.o3_background=this.ol_background;
this.o3_close=this.ol_close;
this.o3_hpos=this.ol_hpos;
this.o3_offsetx=this.ol_offsetx;
this.o3_offsety=this.ol_offsety;
this.o3_fgcolor=this.ol_fgcolor;
this.o3_bgcolor=this.ol_bgcolor;
this.o3_textcolor=this.ol_textcolor;
this.o3_capcolor=this.ol_capcolor;
this.o3_closecolor=this.ol_closecolor;
this.o3_width=this.ol_width;
this.o3_border=this.ol_border;
this.o3_status=this.ol_status;
this.o3_autostatus=this.ol_autostatus;
this.o3_height=this.ol_height;
this.o3_snapx=this.ol_snapx;
this.o3_snapy=this.ol_snapy;
this.o3_fixx=this.ol_fixx;
this.o3_fixy=this.ol_fixy;
this.o3_fgbackground=this.ol_fgbackground;
this.o3_bgbackground=this.ol_bgbackground;
this.o3_padxl=this.ol_padxl;
this.o3_padxr=this.ol_padxr;
this.o3_padyt=this.ol_padyt;
this.o3_padyb=this.ol_padyb;
this.o3_fullhtml=this.ol_fullhtml;
this.o3_vpos=this.ol_vpos;
this.o3_aboveheight=this.ol_aboveheight;
this.o3_capicon=this.ol_capicon;
this.o3_textfont=this.ol_textfont;
this.o3_captionfont=this.ol_captionfont;
this.o3_closefont=this.ol_closefont;
this.o3_textsize=this.ol_textsize;
this.o3_captionsize=this.ol_captionsize;
this.o3_closesize=this.ol_closesize;
this.o3_timeout=this.ol_timeout;
this.o3_function=this.ol_function;
this.o3_delay=this.ol_delay;
this.o3_hauto=this.ol_hauto;
this.o3_vauto=this.ol_vauto;
this.o3_closeclick=this.ol_closeclick;
this.o3_css=this.ol_css;
this.o3_fgclass=this.ol_fgclass;
this.o3_bgclass=this.ol_bgclass;
this.o3_textfontclass=this.ol_textfontclass;
this.o3_captionfontclass=this.ol_captionfontclass;
this.o3_closefontclass=this.ol_closefontclass;
this.o3_padunit=this.ol_padunit;
this.o3_heightunit=this.ol_heightunit;
this.o3_widthunit=this.ol_widthunit;
this.o3_textsizeunit=this.ol_textsizeunit;
this.o3_textdecoration=this.ol_textdecoration;
this.o3_textstyle=this.ol_textstyle;
this.o3_textweight=this.ol_textweight;
this.o3_captionsizeunit=this.ol_captionsizeunit;
this.o3_captiondecoration=this.ol_captiondecoration;
this.o3_captionstyle=this.ol_captionstyle;
this.o3_captionweight=this.ol_captionweight;
this.o3_closesizeunit=this.ol_closesizeunit;
this.o3_closedecoration=this.ol_closedecoration;
this.o3_closestyle=this.ol_closestyle;
this.o3_closeweight=this.ol_closeweight;
fnRef='';
if ( (this.ns4)||(this.ie4)||(this.ns6) ){
if (this.over) this.cClick();
this.o3_frame=this.ol_frame;
if (this.ns4) this.over=this.o3_frame.document.overDiv
if (this.ie4) this.over=this.o3_frame.overDiv.style
if (this.ns6) this.over=this.o3_frame.document.getElementById("overDiv");
}
var parsemode=-1, udf, v=null;
var ar=arguments;
udf=(!ar.length ? 1 : 0);
for (i=0; i < ar.length; i++){
if (parsemode < 0){
if (typeof ar[i]=='number'){
udf=(ar[i]==FUNCTION ? 0 : 1);
i--;
}else{
this.o3_text=ar[i];
}
parsemode=0;
}else{
if (ar[i]==INARRAY){udf=0; this.o3_text=this.ol_texts[ar[++i]]; continue;}
if (ar[i]==CAPARRAY){this.o3_cap=this.ol_caps[ar[++i]]; continue;}
if (ar[i]==STICKY){this.o3_sticky=1; continue;}
if (ar[i]==BACKGROUND){this.o3_background=ar[++i]; continue;}
if (ar[i]==NOCLOSE){this.o3_close=""; continue;}
if (ar[i]==CAPTION){this.o3_cap=ar[++i]; continue;}
if (ar[i]==CENTER || ar[i]==LEFT || ar[i]==RIGHT){this.o3_hpos=ar[i]; continue;}
if (ar[i]==OFFSETX){this.o3_offsetx=ar[++i]; continue;}
if (ar[i]==OFFSETY){this.o3_offsety=ar[++i]; continue;}
if (ar[i]==FGCOLOR){this.o3_fgcolor=ar[++i]; continue;}
if (ar[i]==BGCOLOR){this.o3_bgcolor=ar[++i]; continue;}
if (ar[i]==TEXTCOLOR){this.o3_textcolor=ar[++i]; continue;}
if (ar[i]==CAPCOLOR){this.o3_capcolor=ar[++i]; continue;}
if (ar[i]==CLOSECOLOR){this.o3_closecolor=ar[++i]; continue;}
if (ar[i]==WIDTH){this.o3_width=ar[++i]; continue;}
if (ar[i]==BORDER){this.o3_border=ar[++i]; continue;}
if (ar[i]==STATUS){this.o3_status=ar[++i]; continue;}
if (ar[i]==AUTOSTATUS){this.o3_autostatus=(this.o3_autostatus==1) ? 0 : 1; continue;}
if (ar[i]==AUTOSTATUSCAP){this.o3_autostatus=(this.o3_autostatus==2) ? 0 : 2; continue;}
if (ar[i]==HEIGHT){this.o3_height=ar[++i]; this.o3_aboveheight=ar[i]; continue;} // Same param again.
if (ar[i]==CLOSETEXT){this.o3_close=ar[++i]; continue;}
if (ar[i]==SNAPX){this.o3_snapx=ar[++i]; continue;}
if (ar[i]==SNAPY){this.o3_snapy=ar[++i]; continue;}
if (ar[i]==FIXX){this.o3_fixx=ar[++i]; continue;}
if (ar[i]==FIXY){this.o3_fixy=ar[++i]; continue;}
if (ar[i]==FGBACKGROUND){this.o3_fgbackground=ar[++i]; continue;}
if (ar[i]==BGBACKGROUND){this.o3_bgbackground=ar[++i]; continue;}
if (ar[i]==PADX){this.o3_padxl=ar[++i]; this.o3_padxr=ar[++i]; continue;}
if (ar[i]==PADY){this.o3_padyt=ar[++i]; this.o3_padyb=ar[++i]; continue;}
if (ar[i]==FULLHTML){this.o3_fullhtml=1; continue;}
if (ar[i]==BELOW || ar[i]==ABOVE){this.o3_vpos=ar[i]; continue;}
if (ar[i]==CAPICON){this.o3_capicon=ar[++i]; continue;}
if (ar[i]==TEXTFONT){this.o3_textfont=ar[++i]; continue;}
if (ar[i]==CAPTIONFONT){this.o3_captionfont=ar[++i]; continue;}
if (ar[i]==CLOSEFONT){this.o3_closefont=ar[++i]; continue;}
if (ar[i]==TEXTSIZE){this.o3_textsize=ar[++i]; continue;}
if (ar[i]==CAPTIONSIZE){this.o3_captionsize=ar[++i]; continue;}
if (ar[i]==CLOSESIZE){this.o3_closesize=ar[++i]; continue;}
if (ar[i]==FRAME){this.opt_FRAME(ar[++i]); continue;}
if (ar[i]==TIMEOUT){this.o3_timeout=ar[++i]; continue;}
if (ar[i]==FUNCTION){udf=0; if (typeof ar[i+1] != 'number') v=ar[++i]; this.opt_FUNCTION(v); continue;}
if (ar[i]==DELAY){this.o3_delay=ar[++i]; continue;}
if (ar[i]==HAUTO){this.o3_hauto=(this.o3_hauto==0) ? 1 : 0; continue;}
if (ar[i]==VAUTO){this.o3_vauto=(this.o3_vauto==0) ? 1 : 0; continue;}
if (ar[i]==CLOSECLICK){this.o3_closeclick=(this.o3_closeclick==0) ? 1 : 0; continue;}
if (ar[i]==CSSOFF){this.o3_css=ar[i]; continue;}
if (ar[i]==CSSSTYLE){this.o3_css=ar[i]; continue;}
if (ar[i]==CSSCLASS){this.o3_css=ar[i]; continue;}
if (ar[i]==FGCLASS){this.o3_fgclass=ar[++i]; continue;}
if (ar[i]==BGCLASS){this.o3_bgclass=ar[++i]; continue;}
if (ar[i]==TEXTFONTCLASS){this.o3_textfontclass=ar[++i]; continue;}
if (ar[i]==CAPTIONFONTCLASS){this.o3_captionfontclass=ar[++i]; continue;}
if (ar[i]==CLOSEFONTCLASS){this.o3_closefontclass=ar[++i]; continue;}
if (ar[i]==PADUNIT){this.o3_padunit=ar[++i]; continue;}
if (ar[i]==HEIGHTUNIT){this.o3_heightunit=ar[++i]; continue;}
if (ar[i]==WIDTHUNIT){this.o3_widthunit=ar[++i]; continue;}
if (ar[i]==TEXTSIZEUNIT){this.o3_textsizeunit=ar[++i]; continue;}
if (ar[i]==TEXTDECORATION){this.o3_textdecoration=ar[++i]; continue;}
if (ar[i]==TEXTSTYLE){this.o3_textstyle=ar[++i]; continue;}
if (ar[i]==TEXTWEIGHT){this.o3_textweight=ar[++i]; continue;}
if (ar[i]==CAPTIONSIZEUNIT){this.o3_captionsizeunit=ar[++i]; continue;}
if (ar[i]==CAPTIONDECORATION){this.o3_captiondecoration=ar[++i]; continue;}
if (ar[i]==CAPTIONSTYLE){this.o3_captionstyle=ar[++i]; continue;}
if (ar[i]==CAPTIONWEIGHT){this.o3_captionweight=ar[++i]; continue;}
if (ar[i]==CLOSESIZEUNIT){this.o3_closesizeunit=ar[++i]; continue;}
if (ar[i]==CLOSEDECORATION){this.o3_closedecoration=ar[++i]; continue;}
if (ar[i]==CLOSESTYLE){this.o3_closestyle=ar[++i]; continue;}
if (ar[i]==CLOSEWEIGHT){this.o3_closeweight=ar[++i]; continue;}
}
}
if (udf && this.o3_function) this.o3_text=this.o3_function();
if (this.o3_delay==0){
return this.ov351();
}else{
this.o3_delayid=setTimeout("overlib.ov351()", this.o3_delay);
return false;
}
},
nd: function(){
if ( this.o3_removecounter >= 1 ){this.o3_showingsticky=0 };
if ( (this.ns4)||(this.ie4)||(this.ns6) ){
if ( this.o3_showingsticky==0 ){
this.o3_allowmove=0;
if (this.over != null) this.hideObject(this.over);
}else{
this.o3_removecounter++;
}
}
return true;
},

ov351: function(){
var layerhtml;
if (this.o3_background != "" || this.o3_fullhtml){
layerhtml=this.ol_content_background(this.o3_text, this.o3_background, this.o3_fullhtml);
}else{
if (this.o3_fgbackground != "" && this.o3_css==CSSOFF){
this.o3_fgbackground="BACKGROUND=\""+this.o3_fgbackground+"\"";
}
if (this.o3_bgbackground != "" && this.o3_css==CSSOFF){
this.o3_bgbackground="BACKGROUND=\""+this.o3_bgbackground+"\"";
}
if (this.o3_fgcolor != "" && this.o3_css==CSSOFF){
this.o3_fgcolor="BGCOLOR=\""+this.o3_fgcolor+"\"";
}
if (this.o3_bgcolor != "" && this.o3_css==CSSOFF){
this.o3_bgcolor="BGCOLOR=\""+this.o3_bgcolor+"\"";
}
if (this.o3_height > 0 && this.o3_css==CSSOFF){
this.o3_height="HEIGHT=" + this.o3_height;
}else{
this.o3_height="";
}
if (this.o3_cap==""){
layerhtml=this.ol_content_simple(this.o3_text);
}else{
if (this.o3_sticky){
layerhtml=this.ol_content_caption(this.o3_text, this.o3_cap, this.o3_close);
}else{
layerhtml=this.ol_content_caption(this.o3_text, this.o3_cap, "");
}
}
}
if (this.o3_sticky){
if (this.o3_timerid > 0){
clearTimeout(this.o3_timerid);
this.o3_timerid=0;
}
this.o3_showingsticky=1;
this.o3_removecounter=0;
}
this.layerWrite(layerhtml);
if (this.o3_autostatus > 0){
this.o3_status=this.o3_text;
if (this.o3_autostatus > 1){
this.o3_status=this.o3_cap;
}
}
this.o3_allowmove=0;
if (this.o3_timeout > 0){
if (this.o3_timerid > 0) clearTimeout(this.o3_timerid);
this.o3_timerid=setTimeout("overlib.cClick()", this.o3_timeout);
}
this.disp(this.o3_status);
if (this.o3_sticky) this.o3_allowmove=0;
return (this.o3_status != '');
},

ol_content_simple: function (text){
if (this.o3_css==CSSCLASS) txt="<TABLE WIDTH="+this.o3_width+" BORDER=0 CELLPADDING="+this.o3_border+" CELLSPACING=0 class=\""+this.o3_bgclass+"\"><TR><TD><TABLE WIDTH=100% BORDER=0 CELLPADDING=2 CELLSPACING=0 class=\""+this.o3_fgclass+"\"><TR><TD VALIGN=TOP><FONT class=\""+this.o3_textfontclass+"\">"+text+"</FONT></TD></TR></TABLE></TD></TR></TABLE>";
if (this.o3_css==CSSSTYLE) txt="<TABLE WIDTH="+this.o3_width+" BORDER=0 CELLPADDING="+this.o3_border+" CELLSPACING=0 style=\"background-color: "+this.o3_bgcolor+"; height: "+this.o3_height+this.o3_heightunit+";\"><TR><TD><TABLE WIDTH=100% BORDER=0 CELLPADDING=2 CELLSPACING=0 style=\"color: "+this.o3_fgcolor+"; background-color: "+this.o3_fgcolor+"; height: "+this.o3_height+this.o3_heightunit+";\"><TR><TD VALIGN=TOP><FONT style=\"font-family: "+this.o3_textfont+"; color: "+this.o3_textcolor+"; font-size: "+this.o3_textsize+this.o3_textsizeunit+"; text-decoration: "+this.o3_textdecoration+"; font-weight: "+this.o3_textweight+"; font-style:"+this.o3_textstyle+"\">"+text+"</FONT></TD></TR></TABLE></TD></TR></TABLE>";
if (this.o3_css==CSSOFF) txt="<TABLE WIDTH="+this.o3_width+" BORDER=0 CELLPADDING="+this.o3_border+" CELLSPACING=0 "+this.o3_bgcolor+" "+this.o3_height+"><TR><TD><TABLE WIDTH=100% BORDER=0 CELLPADDING=2 CELLSPACING=0 "+this.o3_fgcolor+" "+this.o3_fgbackground+" "+this.o3_height+"><TR><TD VALIGN=TOP><FONT FACE=\""+this.o3_textfont+"\" COLOR=\""+this.o3_textcolor+"\" SIZE=\""+this.o3_textsize+"\">"+text+"</FONT></TD></TR></TABLE></TD></TR></TABLE>";
this.set_background("");
return txt;
},
ol_content_caption: function (text, title, close){
closing="";
closeevent="onMouseOver";
if (this.o3_closeclick==1) closeevent="onClick";
if (this.o3_capicon != "") this.o3_capicon="<IMG SRC=\""+this.o3_capicon+"\"> ";
if (close != ""){
if (this.o3_css==CSSCLASS) closing="<TD ALIGN=RIGHT><A HREF=\"javascript:return "+fnRef+"overlib.cClick();\" "+closeevent+"=\"return " + fnRef + "overlib.cClick();\" class=\""+this.o3_closefontclass+"\">"+close+"</A></TD>";
if (this.o3_css==CSSSTYLE) closing="<TD ALIGN=RIGHT><A HREF=\"javascript:return "+fnRef+"overlib.cClick();\" "+closeevent+"=\"return " + fnRef + "overlib.cClick();\" style=\"color: "+this.o3_closecolor+"; font-family: "+this.o3_closefont+"; font-size: "+this.o3_closesize+this.o3_closesizeunit+"; text-decoration: "+this.o3_closedecoration+"; font-weight: "+this.o3_closeweight+"; font-style:"+this.o3_closestyle+";\">"+close+"</A></TD>";
if (this.o3_css==CSSOFF) closing="<TD ALIGN=RIGHT><A HREF=\"javascript:return "+fnRef+"overlib.cClick();\" "+closeevent+"=\"return " + fnRef + "overlib.cClick();\"><FONT COLOR=\""+this.o3_closecolor+"\" FACE=\""+this.o3_closefont+"\" SIZE=\""+this.o3_closesize+"\">"+close+"</FONT></A></TD>";
}
if (this.o3_css==CSSCLASS) txt="<TABLE WIDTH="+this.o3_width+" BORDER=0 CELLPADDING="+this.o3_border+" CELLSPACING=0 class=\""+this.o3_bgclass+"\"><TR><TD><TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0><TR><TD><FONT class=\""+this.o3_captionfontclass+"\">"+this.o3_capicon+title+"</FONT></TD>"+closing+"</TR></TABLE><TABLE WIDTH=100% BORDER=0 CELLPADDING=2 CELLSPACING=0 class=\""+this.o3_fgclass+"\"><TR><TD VALIGN=TOP><FONT class=\""+this.o3_textfontclass+"\">"+text+"</FONT></TD></TR></TABLE></TD></TR></TABLE>";
if (this.o3_css==CSSSTYLE) txt="<TABLE WIDTH="+this.o3_width+" BORDER=0 CELLPADDING="+this.o3_border+" CELLSPACING=0 style=\"background-color: "+this.o3_bgcolor+"; background-image: url("+this.o3_bgbackground+"); height: "+this.o3_height+this.o3_heightunit+";\"><TR><TD><TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0><TR><TD><FONT style=\"font-family: "+this.o3_captionfont+"; color: "+this.o3_capcolor+"; font-size: "+this.o3_captionsize+this.o3_captionsizeunit+"; font-weight: "+this.o3_captionweight+"; font-style: "+this.o3_captionstyle+"; text-decoration: " + this.o3_captiondecoration + ";\">"+this.o3_capicon+title+"</FONT></TD>"+closing+"</TR></TABLE><TABLE WIDTH=100% BORDER=0 CELLPADDING=2 CELLSPACING=0 style=\"color: "+this.o3_fgcolor+"; background-color: "+this.o3_fgcolor+"; height: "+this.o3_height+this.o3_heightunit+";\"><TR><TD VALIGN=TOP><FONT style=\"font-family: "+this.o3_textfont+"; color: "+this.o3_textcolor+"; font-size: "+this.o3_textsize+this.o3_textsizeunit+"; text-decoration: "+this.o3_textdecoration+"; font-weight: "+this.o3_textweight+"; font-style:"+this.o3_textstyle+"\">"+text+"</FONT></TD></TR></TABLE></TD></TR></TABLE>";
if (this.o3_css==CSSOFF) txt="<TABLE WIDTH="+this.o3_width+" BORDER=0 CELLPADDING="+this.o3_border+" CELLSPACING=0 "+this.o3_bgcolor+" "+this.o3_bgbackground+" "+this.o3_height+"><TR><TD><TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0><TR><TD><B><FONT COLOR=\""+this.o3_capcolor+"\" FACE=\""+this.o3_captionfont+"\" SIZE=\""+this.o3_captionsize+"\">"+this.o3_capicon+title+"</FONT></B></TD>"+closing+"</TR></TABLE><TABLE WIDTH=100% BORDER=0 CELLPADDING=2 CELLSPACING=0 "+this.o3_fgcolor+" "+this.o3_fgbackground+" "+this.o3_height+"><TR><TD VALIGN=TOP><FONT COLOR=\""+this.o3_textcolor+"\" FACE=\""+this.o3_textfont+"\" SIZE=\""+this.o3_textsize+"\">"+text+"</FONT></TD></TR></TABLE></TD></TR></TABLE>";
this.set_background("");
return txt;
},
ol_content_background: function (text, picture, hasfullhtml){
var txt;
if (hasfullhtml){
txt=text;
}else{
var pU, hU, wU;
pU=(this.o3_padunit=='%' ? '%' : '');
hU=(this.o3_heightunit=='%' ? '%' : '');
wU=(this.o3_widthunit=='%' ? '%' : '');
if (this.o3_css==CSSCLASS) txt="<TABLE WIDTH="+this.o3_width+" BORDER=0 CELLPADDING=0 CELLSPACING=0 HEIGHT="+this.o3_height+"><TR><TD COLSPAN=3 HEIGHT="+this.o3_padyt+"></TD></TR><TR><TD WIDTH="+this.o3_padxl+"></TD><TD VALIGN=TOP WIDTH="+(this.o3_width-this.o3_padxl-this.o3_padxr)+"><FONT class=\""+this.o3_textfontclass+"\">"+text+"</FONT></TD><TD WIDTH="+this.o3_padxr+"></TD></TR><TR><TD COLSPAN=3 HEIGHT="+this.o3_padyb+"></TD></TR></TABLE>";
if (this.o3_css==CSSSTYLE) txt="<TABLE WIDTH="+this.o3_width+wU+" BORDER=0 CELLPADDING=0 CELLSPACING=0 HEIGHT="+this.o3_height+hU+"><TR><TD COLSPAN=3 HEIGHT="+this.o3_padyt+pU+"></TD></TR><TR><TD WIDTH="+this.o3_padxl+pU+"></TD><TD VALIGN=TOP WIDTH="+(this.o3_width-this.o3_padxl-this.o3_padxr)+pU+"><FONT style=\"font-family: "+this.o3_textfont+"; color: "+this.o3_textcolor+"; font-size: "+this.o3_textsize+this.o3_textsizeunit+";\">"+text+"</FONT></TD><TD WIDTH="+this.o3_padxr+pU+"></TD></TR><TR><TD COLSPAN=3 HEIGHT="+this.o3_padyb+pU+"></TD></TR></TABLE>";
if (this.o3_css==CSSOFF) txt="<TABLE WIDTH="+this.o3_width+" BORDER=0 CELLPADDING=0 CELLSPACING=0 HEIGHT="+this.o3_height+"><TR><TD COLSPAN=3 HEIGHT="+this.o3_padyt+"></TD></TR><TR><TD WIDTH="+this.o3_padxl+"></TD><TD VALIGN=TOP WIDTH="+(this.o3_width-this.o3_padxl-this.o3_padxr)+"><FONT FACE=\""+this.o3_textfont+"\" COLOR=\""+this.o3_textcolor+"\" SIZE=\""+this.o3_textsize+"\">"+text+"</FONT></TD><TD WIDTH="+this.o3_padxr+"></TD></TR><TR><TD COLSPAN=3 HEIGHT="+this.o3_padyb+"></TD></TR></TABLE>";
}
this.set_background(picture);
return txt;
},
set_background: function (pic){
if (pic==""){
if (this.ns4) this.over.background.src=null;
if (this.ie4) this.over.backgroundImage="none";
if (this.ns6) this.over.style.backgroundImage="none";
}else{
if (this.ns4){
this.over.background.src=pic;
} else if (this.ie4){
this.over.backgroundImage="url("+pic+")";
} else if (this.ns6){
this.over.style.backgroundImage="url("+pic+")";
}
}
},

disp: function (statustext){
if ( (this.ns4)||(this.ie4)||(this.ns6) ){
if (this.o3_allowmove==0) 	{
this.placeLayer();
this.showObject(this.over);
this.o3_allowmove=1;
}
}
if (statustext != ""){
self.status=statustext;
}
},
placeLayer: function (){
var placeX, placeY;
if (this.o3_fixx > -1){
placeX=this.o3_fixx;
}else{
winoffset=(this.ie4) ? eval('overlib.o3_frame.'+this.docRoot+'.scrollLeft') : this.o3_frame.pageXOffset;
if (this.ie4) iwidth=eval('overlib.o3_frame.'+this.docRoot+'.clientWidth');
if (this.ns4 || this.ns6) iwidth=this.o3_frame.innerWidth;
if (this.o3_hauto==1){
if ( (this.o3_x - winoffset) > ((eval(iwidth)) / 2)){
this.o3_hpos=LEFT;
}else{
this.o3_hpos=RIGHT;
}
}
if (this.o3_hpos==CENTER){// Center
placeX=this.o3_x+this.o3_offsetx-(this.o3_width/2);
if (placeX < winoffset) placeX=winoffset;
}
if (this.o3_hpos==RIGHT){// Right
placeX=this.o3_x+this.o3_offsetx;
if ( (eval(placeX) + eval(this.o3_width)) > (winoffset + iwidth) ){
placeX=iwidth + winoffset - this.o3_width;
if (placeX < 0) placeX=0;
}
}
if (this.o3_hpos==LEFT){// Left
placeX=this.o3_x-this.o3_offsetx-this.o3_width;
if (placeX < winoffset) placeX=winoffset;
}
if (this.o3_snapx > 1){
var snapping=placeX % this.o3_snapx;
if (this.o3_hpos==LEFT){
placeX=placeX - (this.o3_snapx + snapping);
}else{
placeX=placeX + (this.o3_snapx - snapping);
}
if (placeX < winoffset) placeX=winoffset;
}
}
if (this.o3_fixy > -1){
placeY=this.o3_fixy;
}else{
scrolloffset=(this.ie4) ? eval('this.o3_frame.'+this.docRoot+'.scrollTop') : this.o3_frame.pageYOffset;
if (this.o3_vauto==1){
if (this.ie4) iheight=eval('this.o3_frame.'+this.docRoot+'.clientHeight');
if (this.ns4 || this.ns6) iheight=this.o3_frame.innerHeight;
iheight=(eval(iheight)) / 2;
if ( (this.o3_y - scrolloffset) > iheight){
this.o3_vpos=ABOVE;
}else{
this.o3_vpos=BELOW;
}
}
if (this.o3_vpos==ABOVE){
if (this.o3_aboveheight==0){
var divref=(this.ie4) ? this.o3_frame.document.all['overDiv'] : this.over;
this.o3_aboveheight=(this.ns4) ? divref.clip.height : divref.offsetHeight;
}
placeY=this.o3_y - (this.o3_aboveheight + this.o3_offsety);
if (placeY < scrolloffset) placeY=scrolloffset;
}else{
placeY=this.o3_y + this.o3_offsety;
}
if (this.o3_snapy > 1){
var snapping=placeY % this.o3_snapy;
if (this.o3_aboveheight > 0 && this.o3_vpos==ABOVE){
placeY=placeY - (this.o3_snapy + snapping);
}else{
placeY=placeY + (this.o3_snapy - snapping);
}
if (placeY < scrolloffset) placeY=scrolloffset;
}
}
this.repositionTo(this.over, placeX, placeY);
},
mouseMove: function (e){
if ( (overlib.ns4)||(overlib.ns6) ){overlib.o3_x=e.pageX; overlib.o3_y=e.pageY;}
if (overlib.ie4){overlib.o3_x=event.x; overlib.o3_y=event.y;}
if (overlib.ie5){overlib.o3_x=eval('event.x+overlib.o3_frame.'+overlib.docRoot+'.scrollLeft'); overlib.o3_y=eval('event.y+overlib.o3_frame.'+overlib.docRoot+'.scrollTop');}
if (overlib.o3_allowmove==1){
overlib.placeLayer();
}
},
xxxmouseMove: function (e){
if ( (this.ns4)||(this.ns6) ){this.o3_x=e.pageX; this.o3_y=e.pageY;}
if (this.ie4){this.o3_x=event.x; this.o3_y=event.y;}
if (this.ie5){this.o3_x=eval('event.x+overlib.o3_frame.'+this.docRoot+'.scrollLeft'); this.o3_y=eval('event.y+overlib.o3_frame.'+this.docRoot+'.scrollTop');}
if (this.o3_allowmove==1){
this.placeLayer();
}
},
cClick: function (){
this.hideObject(this.over);
this.o3_showingsticky=0;
return false;
},
compatibleframe: function (frameid){
if (this.ns4){
if (typeof frameid.document.overDiv =='undefined') return false;
} else if (this.ie4){
if (typeof frameid.document.all["overDiv"] =='undefined') return false;
} else if (this.ns6){
if (frameid.document.getElementById('overDiv')==null) return false;
}
return true;
},

layerWrite: function (txt){
txt += "\n";
if (this.ns4){
var lyr=this.o3_frame.document.overDiv.document
lyr.write(txt)
lyr.close()
} else if (this.ie4){
this.o3_frame.document.all["overDiv"].innerHTML=txt
} else if (this.ns6){
range=this.o3_frame.document.createRange();
range.setStartBefore(this.over);
domfrag=range.createContextualFragment(txt);
while (this.over.hasChildNodes()){
this.over.removeChild(this.over.lastChild);
}
this.over.appendChild(domfrag);
}
},
showObject: function (obj){
if (this.ns4) obj.visibility="show";
else if (this.ie4) obj.visibility="visible";
else if (this.ns6) obj.style.visibility="visible";
},
hideObject: function (obj){
if (this.ns4) obj.visibility="hide";
else if (this.ie4) obj.visibility="hidden";
else if (this.ns6) obj.style.visibility="hidden";
if (this.o3_timerid > 0) clearTimeout(this.o3_timerid);
if (this.o3_delayid > 0) clearTimeout(this.o3_delayid);
this.o3_timerid=0;
this.o3_delayid=0;
self.status="";
},
repositionTo: function (obj,xL,yL){
if ( (this.ns4)||(this.ie4) ){
obj.left=(this.ie4 ? xL + 'px' : xL);
obj.top=(this.ie4 ? yL + 'px' : yL);
} else if (this.ns6){
obj.style.left=xL + "px";
obj.style.top=yL+ "px";
}
},
getFrameRef: function (thisFrame, ofrm){
var retVal='';
for (var i=0; i<thisFrame.length; i++){
if (thisFrame[i].length > 0){
retVal=this.getFrameRef(thisFrame[i],ofrm);
if (retVal=='') continue;
} else if (thisFrame[i] != ofrm) continue;
retVal='['+i+']' + retVal;
break;
}
return retVal;
},

opt_FRAME: function (frm){
this.o3_frame=this.compatibleframe(frm) ? frm : this.ol_frame;
if (this.o3_frame != ol_frame){
var tFrm=this.getFrameRef(top.frames, this.o3_frame);
var sFrm=this.gwindow.pageYOffsetetFrameRef(top.frames, this.ol_frame);
if (sFrm.length==tFrm.length){
l=tFrm.lastIndexOf('[');
if (l){
while(sFrm.substring(0,l) != tFrm.substring(0,l)) l=tFrm.lastIndexOf('[',l-1);
tFrm=tFrm.substr(l);
sFrm=sFrm.substr(l);
}
}
var cnt=0, p='', str=tFrm;
while((k=str.lastIndexOf('[')) != -1){
cnt++;
str=str.substring(0,k);
}
for (var i=0; i<cnt; i++) p=p + 'parent.';
fnRef=p + 'frames' + sFrm + '.';
}
if ( (this.ns4)||(this.ie4 || (this.ns6)) ){
if (this.ns4) this.over=this.o3_frame.document.overDiv;
if (this.ie4) this.over=this.o3_frame.overDiv.style;
if (this.ns6) this.over=this.o3_frame.document.getElementById("overDiv");
}
return 0;
},
opt_FUNCTION: function (callme){
this.o3_text=(callme ? callme() : (this.o3_function ? this.o3_function() : 'No Function'));
return 0;
}
}
