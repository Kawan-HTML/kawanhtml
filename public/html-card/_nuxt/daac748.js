(window.webpackJsonp=window.webpackJsonp||[]).push([[12],{339:function(t,e,o){"use strict";o.r(e);var n=o(467),r=o.n(n),c=(o(468),{props:["src","mime","content","resizeImage","type"],data:function(){return{cropper:{},dataURL:null,blobData:null,image:{}}},methods:{cropPhoto:function(){var t=this,e=this,canvas=this.cropper.getCroppedCanvas(),o=canvas.toDataURL(this.mime);this.content[this.type].url=o,this.content[this.type].mime=this.mime,canvas.toBlob((function(o){e.content[e.type].blob=new File([o],"photo",{type:t.mime}),e.resizeImage(e.type,e.mime),e.$emit("closeCropper")}),this.mime,.8)}},mounted:function(){this.image=this.$refs.image,this.cropper=new r.a(this.image,{zoomable:!1,scalable:!1,aspectRatio:"photo"==this.type?1:1.5,autoCropArea:1,responsive:!0,viewMode:2,highlight:!1,rotatable:!0})}}),l=o(73),component=Object(l.a)(c,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"flex justify-center fixed top-0 left-0 right-0 bottom-0 items-center z-30 bg-black bg-opacity-80",attrs:{id:"notificationContainer"}},[o("div",{staticClass:"flex flex-col items-center notification content bg-gray-800 text-gray-100 rounded relative z-50 max-w-sm mx-4 p-2"},[o("div",{staticClass:"mb-2 max-w-sm max-h-80"},[o("img",{ref:"image",attrs:{src:t.src}})]),t._v(" "),o("div",{staticClass:"flex"},[o("button",{staticClass:"p-3 font-extrabold rounded tracking-wide focus:outline-none select-none bg-gray-700 mr-2 hover:bg-gray-600 focus:bg-gray-600 transition-colors duration-200",on:{click:function(e){return t.$emit("closeCropper")}}},[t._v("\n        Batal\n      ")]),t._v(" "),o("button",{staticClass:"font-extrabold leading-none tracking-wide select-none shrink-0 p-3 text-white bg-orange-600 rounded hover:bg-orange-500 focus:bg-orange-500 transition-colors duration-200 focus:outline-none",on:{click:t.cropPhoto}},[t._v("\n        Crop gambar\n      ")])])])])}),[],!1,null,null,null);e.default=component.exports}}]);