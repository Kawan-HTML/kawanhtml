(window.webpackJsonp=window.webpackJsonp||[]).push([[14,10],{312:function(e,n,t){"use strict";t.r(n);var o={props:["downloadCheckList","item","index"]},r=t(73),component=Object(r.a)(o,(function(){var e=this,n=e.$createElement,o=e._self._c||n;return o("div",{staticClass:"checklistItem mt-6 mx-2 flex items-center"},[o("div",{staticClass:"relative",staticStyle:{"line-height":"0"}},[o("input",{directives:[{name:"model",rawName:"v-model",value:e.downloadCheckList[e.index].checked,expression:"downloadCheckList[index].checked"}],staticClass:"checkbox cursor-pointer appearance-none bg-black h-12 w-12 border-transparent rounded border transition-colors duration-200 checked:bg-orange-600 checked:border-orange-600 focus:outline-none",class:e.downloadCheckList[e.index].checked?"hover:border-transparent focus:border-transparent":"hover:border-gray-600 focus:border-gray-600",attrs:{type:"checkbox",id:"check"+e.index,"aria-label":"checkbox"},domProps:{checked:Array.isArray(e.downloadCheckList[e.index].checked)?e._i(e.downloadCheckList[e.index].checked,null)>-1:e.downloadCheckList[e.index].checked},on:{change:function(n){var t=e.downloadCheckList[e.index].checked,o=n.target,r=!!o.checked;if(Array.isArray(t)){var c=e._i(t,null);o.checked?c<0&&e.$set(e.downloadCheckList[e.index],"checked",t.concat([null])):c>-1&&e.$set(e.downloadCheckList[e.index],"checked",t.slice(0,c).concat(t.slice(c+1)))}else e.$set(e.downloadCheckList[e.index],"checked",r)}}}),e._v(" "),o("img",{staticClass:"absolute top-0 left-0 m-3 z-10 pointer-events-none select-none transition-opacity duration-200",class:e.item.checked?"opacity-100":"opacity-10",attrs:{alt:"checkmark",src:t(338)}})]),e._v(" "),o("p",{staticClass:"ml-3"},[e._v(e._s(e.item.label))])])}),[],!1,null,null,null);n.default=component.exports},338:function(e,n){e.exports="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkO3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoyIj48cGF0aCBzdHlsZT0iZmlsbDpub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIxIDUgOCAxOGwtNS01IiBzdHlsZT0iZmlsbDpub25lO2ZpbGwtcnVsZTpub256ZXJvO3N0cm9rZTojZmZmO3N0cm9rZS13aWR0aDoycHgiLz48L3N2Zz4="},510:function(e,n,t){"use strict";t.r(n);t(14),t(26),t(27),t(265),t(187);var o={props:["downloadCheckList","downloadChecked","downloadPackage"],components:{Check:t(312).default},data:function(){return{whatsappLink:""}},methods:{prepareZipAndWhatsapp:function(){var e=this;this.generateZip().then((function(){var n=encodeURIComponent("Halo, saya tertarik dengan publikasi kartu virtual. Saya telah mengunduh file ZIP dan ingin menggunakan layanan ini untuk mengunggahnya. ");e.whatsappLink="https://wa.me/6285145774280?text=".concat(n),window.open(e.whatsappLink,"_blank")}))},generateZip:function(){return new Promise((function(e,n){fetch("/api/generate-zip").then((function(e){return e.blob()})).then((function(n){var t=window.URL.createObjectURL(n),a=document.createElement("a");a.style.display="none",a.href=t,a.download="kartu_digital.zip",document.body.appendChild(a),a.click(),window.URL.revokeObjectURL(t),e()})).catch((function(e){console.error("Error generating ZIP:",e),n(e)}))}))}}},r=t(73),component=Object(r.a)(o,(function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{staticClass:"mt-16",attrs:{id:"downloadSection"}},[t("h2",{staticClass:"font-extrabold text-2xl"},[e._v("Download")]),e._v(" "),t("div",{staticClass:"stepC mt-6"},[t("p",[e._v("Lengkapi checklist berikut terlebih dahulu:")]),e._v(" "),e._l(e.downloadCheckList,(function(n,o){return t("Check",{key:o,attrs:{downloadCheckList:e.downloadCheckList,item:n,index:o}})})),e._v(" "),t("button",{ref:"downloadPackage",staticClass:"inline-block bg-gray-700 leading-none text-2xl tracking-wide border-2 border-transparent font-extrabold p-6 rounded mt-12 select-none transition-colors duration-200 focus:outline-none",class:e.downloadChecked?"bg-orange-600 cursor-pointer text-white focus:bg-orange-500 hover:bg-orange-500":"cursor-not-allowed text-black",attrs:{title:e.downloadChecked?"":"Lengakapi checklist terlebih dahulu untuk mendownload"},on:{click:e.downloadPackage}},[e._v("\n      Download ZIP\n    ")]),e._v(" "),t("p",{staticClass:"mt-6 border p-4 rounded border-gray-700 text-gray-400"},[e._v("\n      Suka dengan desain kartu virtual Anda? Siap untuk membagikannya ke internet?\n      Hanya dengan harga yang sangat murah, Anda bisa mendapatkan layanan publikasi ke internet. Jika Anda tertarik\n      silahkan hubungi nomor WhatsApp kami di\n      "),t("br"),e._v(" "),t("a",{staticClass:"inline-block font-extrabold tracking-wide leading-none shrink-0 p-3 text-white bg-green-700 rounded hover:bg-green-600 focus:bg-green-600 transition-colors duration-200 mt-4",attrs:{href:"https://wa.me/6285145774280",rel:"noreferrer",target:"_blank"},on:{click:function(e){}}},[e._v("Chat on Whatsapp")])])],2)])}),[],!1,null,null,null);n.default=component.exports;installComponents(component,{Check:t(312).default})}}]);