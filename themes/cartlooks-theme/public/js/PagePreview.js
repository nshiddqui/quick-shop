"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[6910],{6418:(e,t,a)=>{a.r(t),a.d(t,{default:()=>f});var n=a(118),o={class:""},i={key:0,class:"light-bg"},c={key:3,class:"pt-30 pt-lg-60 pb-60 light-bg"},l={class:"custom-container2"},s={class:"row"},d={class:"col-lg-12"},r={class:"post-details"},g={class:"entry-header"},p={class:"entry-thumbnail"},u=["src"],m={class:"entry-title"},b=["innerHTML"];var v=(0,n.defineAsyncComponent)((function(){return a.e(5218).then(a.bind(a,5218))})),h=(0,n.defineAsyncComponent)((function(){return a.e(5596).then(a.bind(a,5596))})),_=a(9669).default;const k={name:"Products",components:{PageHeader:v,BuilderSection:h},data:function(){return{pageTitle:"Page Details",wToggle:!1,bItems:[{text:"Home",href:"/"},{text:"Preview",active:!0}],pageLoading:!0,is_breadcrumb:!1,page:{},page_section:{},active_pagebuilder:!1,page_builder_widgets:{}}},mounted:function(){this.getPageDetails()},methods:{getPageDetails:function(){var e=this,t=this.$route.params.id,a={"Content-Type":"application/json","Accept-Language":localStorage.getItem("locale")||"en"};_.get("/api/theme/cartlooks-theme/v1/preview-page/"+t,{headers:a}).then((function(t){var a,n;t.data.success&&(e.page=t.data.page,e.page_section=null!==(a=t.data.page_sections)&&void 0!==a?a:{},e.active_pagebuilder=t.data.active_pagebuilder,e.page_builder_widgets=null!==(n=t.data.page_builder_widgets)&&void 0!==n?n:{},e.is_breadcrumb=!(e.active_pagebuilder&&"builder"==e.page.page_type),e.loaded())})).catch((function(e){}))},loaded:function(){this.pageLoading=!1}}};const f=(0,a(3744).Z)(k,[["render",function(e,t,a,v,h,_){var k=(0,n.resolveComponent)("skeleton"),f=(0,n.resolveComponent)("page-header"),y=(0,n.resolveComponent)("builder-section");return(0,n.openBlock)(),(0,n.createElementBlock)("div",o,[h.pageLoading?((0,n.openBlock)(),(0,n.createElementBlock)("div",i,[(0,n.createVNode)(k,{height:"100vh",class:"w-100 pt-20"})])):(0,n.createCommentVNode)("",!0),h.is_breadcrumb?((0,n.openBlock)(),(0,n.createBlock)(f,{key:1,items:h.bItems},null,8,["items"])):(0,n.createCommentVNode)("",!0),h.active_pagebuilder&&"builder"==h.page.page_type?((0,n.openBlock)(),(0,n.createBlock)(y,{key:2,page:h.page,sections:h.page_section,widgets:h.page_builder_widgets,onSectionLoaded:_.loaded},null,8,["page","sections","widgets","onSectionLoaded"])):((0,n.openBlock)(),(0,n.createElementBlock)("div",c,[(0,n.createElementVNode)("div",l,[(0,n.createElementVNode)("div",s,[(0,n.createElementVNode)("div",d,[(0,n.createElementVNode)("article",r,[(0,n.createElementVNode)("header",g,[(0,n.createElementVNode)("div",p,[(0,n.createElementVNode)("img",{src:h.page.page_image,alt:""},null,8,u)]),(0,n.createElementVNode)("h1",m,(0,n.toDisplayString)(h.page.title),1)]),(0,n.createElementVNode)("div",{class:"entry-content mb-40",innerHTML:h.page.content},null,8,b)])])])])]))])}]])}}]);