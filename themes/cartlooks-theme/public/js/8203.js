"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[8203],{8536:(e,t,n)=>{n.d(t,{Z:()=>o});var r=n(3645),a=n.n(r)()((function(e){return e[1]}));a.push([e.id,".top-bar-banner[data-v-2146ab6a]{top:0;width:100%}.top-bar-banner img[data-v-2146ab6a]{min-height:36px;width:100%}.top-bar-banner_link[data-v-2146ab6a]{display:inline-block;position:relative;width:100%}.top-bar-banner_close_btn[data-v-2146ab6a]{border:none;position:absolute;right:20px;top:50%;transform:translateY(-50%)}",""]);const o=a},8203:(e,t,n)=>{n.r(t),n.d(t,{default:()=>h});var r=n(118),a={key:0,class:"top-bar-banner"},o=["href"],i=["src"];function l(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=n){var r,a,o,i,l=[],c=!0,u=!1;try{if(o=(n=n.call(e)).next,0===t){if(Object(n)!==n)return;c=!1}else for(;!(c=(r=o.call(n)).done)&&(l.push(r.value),l.length!==t);c=!0);}catch(e){u=!0,a=e}finally{try{if(!c&&null!=n.return&&(i=n.return(),Object(i)!==i))return}finally{if(u)throw a}}return l}}(e,t)||c(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function c(e,t){if(e){if("string"==typeof e)return u(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?u(e,t):void 0}}function u(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}const s={name:"TopBarBanner",props:{properties:{type:Object,default:null}},computed:{banner_status:function(){var e,t=null,n=function(e,t){var n="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!n){if(Array.isArray(e)||(n=c(e))||t&&e&&"number"==typeof e.length){n&&(e=n);var r=0,a=function(){};return{s:a,n:function(){return r>=e.length?{done:!0}:{done:!1,value:e[r++]}},e:function(e){throw e},f:a}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var o,i=!0,l=!1;return{s:function(){n=n.call(e)},n:function(){var e=n.next();return i=e.done,e},e:function(e){l=!0,o=e},f:function(){try{i||null==n.return||n.return()}finally{if(l)throw o}}}}(document.cookie.split("; "));try{for(n.s();!(e=n.n()).done;){var r=l(e.value.split("="),2),a=r[0],o=r[1];"top_bar_banner"===a&&(t=o)}}catch(e){n.e(e)}finally{n.f()}return null!=t&&1==t?0:1}},methods:{closeBanner:function(){var e=new Date,t=new Date(e.getTime()+72e5);document.cookie="top_bar_banner=1; expires=".concat(t.toUTCString(),"; path=/"),this.properties.topbar_banner_status=0}}};var b=n(3379),p=n.n(b),f=n(8536),d={insert:"head",singleton:!1};p()(f.Z,d);f.Z.locals;const h=(0,n(3744).Z)(s,[["render",function(e,t,n,l,c,u){var s=(0,r.resolveComponent)("base-icon-svg");return 1==u.banner_status?((0,r.openBlock)(),(0,r.createElementBlock)("div",a,[(0,r.createElementVNode)("a",{href:n.properties.topbar_banner_link,class:"top-bar-banner_link"},[(0,r.createElementVNode)("img",{src:n.properties.topbar_banner_image},null,8,i),(0,r.createElementVNode)("button",{class:"top-bar-banner_close_btn btn-circle size-35",onClick:t[0]||(t[0]=(0,r.withModifiers)((function(e){return u.closeBanner()}),["prevent"]))},[(0,r.createVNode)(s,{name:"close",width:10,height:10})])],8,o)])):(0,r.createCommentVNode)("",!0)}],["__scopeId","data-v-2146ab6a"]])}}]);