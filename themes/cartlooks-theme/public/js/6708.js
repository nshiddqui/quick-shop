"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[6708],{6708:(e,t,s)=>{s.r(t),s.d(t,{default:()=>d});var o=s(118),n={key:0},c={class:"post-summary"},r={class:"post-title mt-2 title-excerpt"},a=["href"],l={class:"posted-on"},i=["href"];var p=s(9669),u=s.n(p);const m={name:"ListBlog",props:{properties:{type:Object,required:{}}},data:function(){return{blogs:[],success:!1}},mounted:function(){this.getSectionBlogs()},methods:{getSectionBlogs:function(){var e=this;u().post("/api/theme/cartlooks-theme/v1/home-page-blogs-list",{quantity:this.properties.count,content:this.properties.type,category:this.properties.category}).then((function(t){t.data.success?(e.blogs=t.data.data,e.success=!0):e.success=!1})).catch((function(t){e.success=!1}))}}};const d=(0,s(3744).Z)(m,[["render",function(e,t,s,p,u,m){return u.success?((0,o.openBlock)(),(0,o.createElementBlock)("section",n,[(0,o.createElementVNode)("ul",null,[((0,o.openBlock)(!0),(0,o.createElementBlock)(o.Fragment,null,(0,o.renderList)(u.blogs,(function(e,t){return(0,o.openBlock)(),(0,o.createElementBlock)("li",{key:t},[(0,o.createElementVNode)("div",c,[(0,o.createElementVNode)("h5",r,[(0,o.createElementVNode)("a",{href:"/blog/"+e.permalink},(0,o.toDisplayString)(e.title),9,a)]),(0,o.createElementVNode)("span",l,[(0,o.createElementVNode)("a",{href:"/blog/"+e.permalink},(0,o.toDisplayString)(e.date),9,i)])])])})),128))])])):(0,o.createCommentVNode)("",!0)}]])}}]);