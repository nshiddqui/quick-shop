"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[4653,5218],{1709:(e,t,o)=>{o.d(t,{Z:()=>n});var r=o(3645),a=o.n(r)()((function(e){return e[1]}));a.push([e.id,".page-header[data-v-3c290d92]{padding:16px 0}",""]);const n=a},5218:(e,t,o)=>{o.r(t),o.d(t,{default:()=>p});var r=o(118),a={class:"custom-container2"},n={class:"row"},s={class:"col-12"};var c=o(8549);const l={name:"PageHeader",components:{CBreadcrumb:c.fj,CBreadcrumbItem:c.Sd},props:{title:{type:String,default:""},whiteBg:{type:Boolean,default:!1},items:{type:Array,default:function(){return[]}},small:{type:Boolean,default:!1}}};var i=o(3379),d=o.n(i),m=o(1709),u={insert:"head",singleton:!1};d()(m.Z,u);m.Z.locals;const p=(0,o(3744).Z)(l,[["render",function(e,t,o,c,l,i){var d=(0,r.resolveComponent)("CBreadcrumbItem"),m=(0,r.resolveComponent)("CBreadcrumb");return(0,r.openBlock)(),(0,r.createElementBlock)("div",{class:(0,r.normalizeClass)(["page-header bg-light d-none d-lg-block",{"white-box":o.whiteBg}])},[(0,r.createElementVNode)("div",a,[(0,r.createElementVNode)("div",n,[(0,r.createElementVNode)("div",s,[o.title?((0,r.openBlock)(),(0,r.createElementBlock)("h2",{key:0,class:(0,r.normalizeClass)(["page-title",{small:o.small}])},(0,r.toDisplayString)(o.title),3)):(0,r.createCommentVNode)("",!0),(0,r.createVNode)(m,{style:{"--cui-breadcrumb-divider":"'>'"}},{default:(0,r.withCtx)((function(){return[((0,r.openBlock)(!0),(0,r.createElementBlock)(r.Fragment,null,(0,r.renderList)(o.items,(function(e){return(0,r.openBlock)(),(0,r.createBlock)(d,{href:e.href,class:(0,r.normalizeClass)({active:e.active}),key:e},{default:(0,r.withCtx)((function(){return[(0,r.createTextVNode)((0,r.toDisplayString)(e.text),1)]})),_:2},1032,["href","class"])})),128))]})),_:1})])])])],2)}],["__scopeId","data-v-3c290d92"]])},548:(e,t,o)=>{o.r(t),o.d(t,{default:()=>re});var r=o(118),a={class:""},n={class:"pt-60 pb-60 light-bg"},s={class:"custom-container2"},c={class:"col-lg-5 mx-auto p-md-5 px-3 py-4 white-box"},l={class:"row"},i={class:"mb-4"},d={class:"col-lg-12"},m={class:"form-group mb-20"},u={class:"font-weight-bold fz-12 mb-2"},p=(0,r.createElementVNode)("span",{class:"text-danger"},"*",-1),g={class:""},h=["placeholder"],f={class:"col-lg-12"},V={class:"form-group mb-20"},N={class:"font-weight-bold fz-12 mb-2"},v=(0,r.createElementVNode)("span",{class:"text-danger"},"*",-1),E={class:""},k=["placeholder"],y={class:"col-lg-12"},b={class:"form-group mb-20"},_={class:"font-weight-bold fz-12 mb-2"},w=(0,r.createElementVNode)("span",{class:"text-danger"},"*",-1),D={class:""},x={class:"phone-number-wrap d-flex"},B=["placeholder"],C={class:"col-lg-12"},S={class:"form-group mb-20"},$={class:"font-weight-bold fz-12 mb-2"},z=(0,r.createElementVNode)("span",{class:"text-danger"},"*",-1),T={class:""},P=["placeholder"],R={class:"col-lg-12"},I={class:"form-group mb-20"},L={for:"confirmPassword",class:"font-weight-bold fz-12 mb-2"},M=(0,r.createElementVNode)("span",{class:"text-danger"},"*",-1),U={class:""},F=["placeholder"],Z={class:"row form-group align-items-center"},q={class:"col-12 d-flex align-items-center"},H={class:"checkmark",for:"term"},A={key:0,class:"fz-12 text-danger mt-1"},j={class:"row"},J={class:"col-12 mt-3"},O=["disabled"],G={key:0},K={key:1},Q={class:"col-12 mt-3"};var W=o(3907),X=o(5218),Y=o(8549),ee=o(9669),te=o.n(ee);const oe={components:{PageHeader:X.default,CSpinner:Y.z6},data:function(){return{pageTitle:"Register",bItems:[{text:this.$t("Home"),href:"/"},{text:this.$t("Register"),active:!0}],customerData:{name:"",email:"",phone:"",phone_code:null!=localStorage.getItem("country")?JSON.parse(localStorage.getItem("country")).phone_code:"",password:"",password_confirmation:""},term_condition_agreement:!1,term_condition_agreement_error:"",notification:"",notificationClass:"alert alert-info",errors:[],phone_codes:[],formSubmitting:!1}},computed:(0,W.rn)({siteSettings:function(e){return e.siteSettings}}),mounted:function(){document.title=this.$t("Registration"),this.getPhoneCodes()},methods:{getPhoneCodes:function(){var e=this;te().get("/api/v1/ecommerce-core/phone-codes").then((function(t){t.data.success&&(e.phone_codes=t.data.phone_codes)})).catch((function(t){e.phone_codes=[]}))},customerRegister:function(){var e=this;this.formSubmitting=!0,this.term_condition_agreement_error="",this.notification="",this.errors=[],this.term_condition_agreement?te().post("/api/v1/ecommerce-core/auth/customer-registration",{name:this.customerData.name,email:this.customerData.email,phone_code:this.customerData.phone_code,phone:this.customerData.phone,password:this.customerData.password,password_confirmation:this.customerData.password_confirmation}).then((function(t){t.data.success&&null!=t.data.customer?null==t.data.customer.verified_at&&2==t.data.customer.status?(e.notification=e.$t("Registration successful. check your email to verify your email"),e.notificationClass="alert alert-success",e.customerData.name="",e.customerData.email="",e.customerData.phone="",e.customerData.password="",e.customerData.password_confirmation="",e.term_condition_agreement=!1):(e.$toast.success(e.$t("Registration successful")),e.$router.push("Login")):e.$toast.error(e.$t("Registration failed")),e.formSubmitting=!1})).catch((function(t){422==t.response.status&&(e.errors=t.response.data.errors),e.formSubmitting=!1})):(this.term_condition_agreement_error=this.$t("Check terms and conditions"),this.formSubmitting=!1)}}};const re=(0,o(3744).Z)(oe,[["render",function(e,t,o,W,X,Y){var ee=(0,r.resolveComponent)("page-header"),te=(0,r.resolveComponent)("router-link"),oe=(0,r.resolveComponent)("CSpinner");return(0,r.openBlock)(),(0,r.createElementBlock)("div",a,[(0,r.createVNode)(ee,{class:"pt-3 pb-3",items:X.bItems},null,8,["items"]),(0,r.createElementVNode)("div",n,[(0,r.createElementVNode)("div",s,[(0,r.createElementVNode)("div",c,[X.notification?((0,r.openBlock)(),(0,r.createElementBlock)("p",{key:0,class:(0,r.normalizeClass)(X.notificationClass)},(0,r.toDisplayString)(X.notification),3)):(0,r.createCommentVNode)("",!0),(0,r.createElementVNode)("div",l,[(0,r.createElementVNode)("h2",i,(0,r.toDisplayString)(e.$t("Registration")),1),(0,r.createElementVNode)("div",d,[(0,r.createElementVNode)("div",m,[(0,r.createElementVNode)("label",u,[(0,r.createTextVNode)((0,r.toDisplayString)(e.$t("Name"))+" ",1),p]),(0,r.createElementVNode)("div",g,[(0,r.withDirectives)((0,r.createElementVNode)("input",{type:"text",placeholder:e.$t("Name"),class:"theme-input-style","onUpdate:modelValue":t[0]||(t[0]=function(e){return X.customerData.name=e})},null,8,h),[[r.vModelText,X.customerData.name]]),X.errors.name?((0,r.openBlock)(!0),(0,r.createElementBlock)(r.Fragment,{key:0},(0,r.renderList)(X.errors.name,(function(e,t){return(0,r.openBlock)(),(0,r.createElementBlock)("p",{class:"fz-12 text-danger mt-1",key:t},(0,r.toDisplayString)(e),1)})),128)):(0,r.createCommentVNode)("",!0)])])]),(0,r.createElementVNode)("div",f,[(0,r.createElementVNode)("div",V,[(0,r.createElementVNode)("label",N,[(0,r.createTextVNode)((0,r.toDisplayString)(e.$t("Email"))+" ",1),v]),(0,r.createElementVNode)("div",E,[(0,r.withDirectives)((0,r.createElementVNode)("input",{type:"email",placeholder:e.$t("Email"),class:"theme-input-style",required:"","onUpdate:modelValue":t[1]||(t[1]=function(e){return X.customerData.email=e})},null,8,k),[[r.vModelText,X.customerData.email]]),X.errors.email?((0,r.openBlock)(!0),(0,r.createElementBlock)(r.Fragment,{key:0},(0,r.renderList)(X.errors.email,(function(e,t){return(0,r.openBlock)(),(0,r.createElementBlock)("p",{class:"fz-12 text-danger mt-1",key:t},(0,r.toDisplayString)(e),1)})),128)):(0,r.createCommentVNode)("",!0)])])]),(0,r.createElementVNode)("div",y,[(0,r.createElementVNode)("div",b,[(0,r.createElementVNode)("label",_,[(0,r.createTextVNode)((0,r.toDisplayString)(e.$t("Phone"))+" ",1),w]),(0,r.createElementVNode)("div",D,[(0,r.createElementVNode)("div",x,[(0,r.withDirectives)((0,r.createElementVNode)("input",{type:"tel",placeholder:e.$t("Phone Number"),class:"theme-input-style",required:"","onUpdate:modelValue":t[2]||(t[2]=function(e){return X.customerData.phone=e})},null,8,B),[[r.vModelText,X.customerData.phone]])]),X.errors.phone?((0,r.openBlock)(!0),(0,r.createElementBlock)(r.Fragment,{key:0},(0,r.renderList)(X.errors.phone,(function(e,t){return(0,r.openBlock)(),(0,r.createElementBlock)("p",{class:"fz-12 text-danger mt-1",key:t},(0,r.toDisplayString)(e),1)})),128)):(0,r.createCommentVNode)("",!0)])])]),(0,r.createElementVNode)("div",C,[(0,r.createElementVNode)("div",S,[(0,r.createElementVNode)("label",$,[(0,r.createTextVNode)((0,r.toDisplayString)(e.$t("Password")),1),z]),(0,r.createElementVNode)("div",T,[(0,r.withDirectives)((0,r.createElementVNode)("input",{type:"password",placeholder:e.$t("Password"),class:"theme-input-style",required:"","onUpdate:modelValue":t[3]||(t[3]=function(e){return X.customerData.password=e})},null,8,P),[[r.vModelText,X.customerData.password]]),X.errors.password?((0,r.openBlock)(!0),(0,r.createElementBlock)(r.Fragment,{key:0},(0,r.renderList)(X.errors.password,(function(e,t){return(0,r.openBlock)(),(0,r.createElementBlock)("p",{class:"fz-12 text-danger mt-1",key:t},(0,r.toDisplayString)(e),1)})),128)):(0,r.createCommentVNode)("",!0)])])]),(0,r.createElementVNode)("div",R,[(0,r.createElementVNode)("div",I,[(0,r.createElementVNode)("label",L,[(0,r.createTextVNode)((0,r.toDisplayString)(e.$t("Confirm Password")),1),M]),(0,r.createElementVNode)("div",U,[(0,r.withDirectives)((0,r.createElementVNode)("input",{id:"confirmPassword",type:"password",placeholder:e.$t("Confirm Password"),class:"theme-input-style",required:"","onUpdate:modelValue":t[4]||(t[4]=function(e){return X.customerData.password_confirmation=e})},null,8,F),[[r.vModelText,X.customerData.password_confirmation]])])])])]),(0,r.createElementVNode)("div",Z,[(0,r.createElementVNode)("div",q,[(0,r.withDirectives)((0,r.createElementVNode)("input",{type:"checkbox",id:"term","onUpdate:modelValue":t[5]||(t[5]=function(e){return X.term_condition_agreement=e})},null,512),[[r.vModelCheckbox,X.term_condition_agreement]]),(0,r.createElementVNode)("label",H,[(0,r.createElementVNode)("span",null,(0,r.toDisplayString)(e.$t("I have read and agree to the ")),1),(0,r.createVNode)(te,{to:"/page/".concat(e.siteSettings.customer_term_condition_page_slug),target:"_blank",class:"c1"},{default:(0,r.withCtx)((function(){return[(0,r.createTextVNode)((0,r.toDisplayString)(e.$t("terms and conditions")),1)]})),_:1},8,["to"])])]),X.term_condition_agreement_error?((0,r.openBlock)(),(0,r.createElementBlock)("p",A,(0,r.toDisplayString)(X.term_condition_agreement_error),1)):(0,r.createCommentVNode)("",!0)]),(0,r.createElementVNode)("div",j,[(0,r.createElementVNode)("div",J,[(0,r.createElementVNode)("button",{onClick:t[6]||(t[6]=(0,r.withModifiers)((function(){return Y.customerRegister&&Y.customerRegister.apply(Y,arguments)}),["prevent"])),disabled:X.formSubmitting,class:"btn btn-fill"},[X.formSubmitting?((0,r.openBlock)(),(0,r.createElementBlock)("span",G,[(0,r.createVNode)(oe,{component:"span",size:"sm","aria-hidden":"true"}),(0,r.createTextVNode)(" "+(0,r.toDisplayString)(e.$t("Please wait")),1)])):((0,r.openBlock)(),(0,r.createElementBlock)("span",K,(0,r.toDisplayString)(e.$t("Register")),1))],8,O)]),(0,r.createElementVNode)("div",Q,[(0,r.createTextVNode)((0,r.toDisplayString)(e.$t("Already have an account"))+" ? ",1),(0,r.createVNode)(te,{to:"/login",class:"btn_underline"},{default:(0,r.withCtx)((function(){return[(0,r.createTextVNode)((0,r.toDisplayString)(e.$t("Login Here")),1)]})),_:1})])])])])])])}]])}}]);