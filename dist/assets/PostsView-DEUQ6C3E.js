import{_ as c,r as n,o as i,a as d,b as s,c as o,F as _,d as l,e as p,P as u,f as h}from"./index-CHJFe32x.js";const m={class:"posts-section"},f={__name:"PostsMain",setup(r){const a=n([]);return i(async()=>{d.get("http://localhost/php-blog/server/posts/list").then(e=>{a.value=e.data.dados}).catch(e=>{console.error("Erro ao buscar dados: ",e)})}),(e,P)=>(s(),o("section",m,[(s(!0),o(_,null,l(a.value,t=>(s(),p(u,{key:t.id,id:t.id,title:t.title,description:t.short_description,date:t.date},null,8,["id","title","description","date"]))),128))]))}},x=c(f,[["__scopeId","data-v-2e325dfb"]]),k={__name:"PostsView",setup(r){return(a,e)=>(s(),o("main",null,[h(x)]))}};export{k as default};