"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[1939],{4697:(e,t,r)=>{r.d(t,{Z:()=>o});var n=r(3645),a=r.n(n)()((function(e){return e[1]}));a.push([e.id,"[data-v-24977aaa]:root{--mainC:#22303f}@media (max-width:767px){.slide-img.desktop[data-v-24977aaa]{display:none}}.slide-img.mobile[data-v-24977aaa]{display:none}@media (max-width:767px){.slide-img.mobile[data-v-24977aaa]{display:block}}",""]);const o=a},1939:(e,t,r)=>{r.r(t),r.d(t,{default:()=>A});var n=r(118),a={class:"product-banner-item d-flex align-items-center justify-content-center"},o={class:"slide-img desktop"},s=["href"],c=["src"],i={class:"slide-img mobile"},l=["href"],d=["src"];const u={name:"ProductBanner",components:{"v-lazy-image":r(4176).Z},props:{content:{type:Object,required:!0}}};var p=r(3379),m=r.n(p),v=r(4697),b={insert:"head",singleton:!1};m()(v.Z,b);v.Z.locals;const A=(0,r(3744).Z)(u,[["render",function(e,t,r,u,p,m){return(0,n.openBlock)(),(0,n.createElementBlock)("div",a,[(0,n.createElementVNode)("div",o,[(0,n.createElementVNode)("a",{href:r.content.url},[(0,n.createElementVNode)("img",{src:r.content.desktop,alt:"image"},null,8,c)],8,s)]),(0,n.createElementVNode)("div",i,[(0,n.createElementVNode)("a",{href:r.content.url},[(0,n.createElementVNode)("img",{src:r.content.mobile,alt:"image"},null,8,d)],8,l)])])}],["__scopeId","data-v-24977aaa"]])},4176:(e,t,r)=>{r.d(t,{Z:()=>u});var n=r(118),a=Object.defineProperty,o=Object.defineProperties,s=Object.getOwnPropertyDescriptors,c=Object.getOwnPropertySymbols,i=Object.prototype.hasOwnProperty,l=Object.prototype.propertyIsEnumerable,d=(e,t,r)=>t in e?a(e,t,{enumerable:!0,configurable:!0,writable:!0,value:r}):e[t]=r,u={props:{src:{type:String,required:!0},srcPlaceholder:{type:String,default:"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"},srcset:{type:String},intersectionOptions:{type:Object,default:()=>({})},usePicture:{type:Boolean,default:!1}},inheritAttrs:!1,setup(e,{attrs:t,slots:r,emit:a}){const u=(0,n.ref)(null),p=(0,n.reactive)({observer:null,intersected:!1,loaded:!1}),m=(0,n.computed)((()=>p.intersected&&e.src?e.src:e.srcPlaceholder)),v=(0,n.computed)((()=>!(!p.intersected||!e.srcset)&&e.srcset)),b=()=>{u.value&&u.value.getAttribute("src")!==e.srcPlaceholder&&(p.loaded=!0,a("load",u.value))},A=()=>a("error",u.value);return(0,n.onMounted)((()=>{"IntersectionObserver"in window&&(p.observer=new IntersectionObserver((e=>{e[0].isIntersecting&&(p.intersected=!0,p.observer.disconnect(),a("intersect"))}),e.intersectionOptions),p.observer.observe(u.value))})),(0,n.onBeforeUnmount)((()=>{"IntersectionObserver"in window&&p.observer&&p.observer.disconnect()})),()=>{const a=(0,n.h)("img",(f=((e,t)=>{for(var r in t||(t={}))i.call(t,r)&&d(e,r,t[r]);if(c)for(var r of c(t))l.call(t,r)&&d(e,r,t[r]);return e})({ref:u,src:m.value,srcset:v.value||null},t),g={class:[t.class,"v-lazy-image",{"v-lazy-image-loaded":p.loaded}],onLoad:b,onError:A},o(f,s(g))));var f,g;return e.usePicture?(0,n.h)("picture",{ref:u,onLoad:b},p.intersected?[r.default,a]:[a]):a}}}}}]);