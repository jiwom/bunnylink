(self.webpackChunk=self.webpackChunk||[]).push([[692],{4692:(a,t,e)=>{"use strict";e.r(t),e.d(t,{default:()=>s});var d=e(5166),i=(0,d.withScopeId)("data-v-e69c4136");(0,d.pushScopeId)("data-v-e69c4136");var l=(0,d.createStaticVNode)('<div class="container-fluid p-0" data-v-e69c4136><h1 class="h3 mb-3" data-v-e69c4136>Rabbits</h1><div class="row" data-v-e69c4136><div class="col-12" data-v-e69c4136><div class="card" data-v-e69c4136><div class="card-header" data-v-e69c4136> Rabbits Data Table </div><div class="card-body" data-v-e69c4136><div class="row" data-v-e69c4136><div class="col-12 mt-3" data-v-e69c4136><table id="rabbits-table" class="table table-hover nowrap" style="width:100%;" data-v-e69c4136></table></div></div></div></div></div></div></div>',1);(0,d.popScopeId)();var c=i((function(a,t,e,i,c,r){return(0,d.openBlock)(),(0,d.createBlock)("div",null,[l])}));const r={name:"Rabbits.vue",props:["data"],data:function(){return{dt:null}},mounted:function(){this.dt=$("#rabbits-table").DataTable({scrollX:!0,serverSide:!0,ajax:{url:this.data.rabbits_table_link,type:"POST"},order:[[0,"desc"]],columns:[{data:"tag_id",title:"ID"},{data:"breeding_id",title:"Breeding ID"},{data:"cage_no",title:"Cage No."},{data:"category",title:"Category"},{data:"breed",title:"Breed"},{data:"type",title:"Type"},{data:"color",title:"Color"},{data:"dob",title:"Date Of Birth"},{data:"gender",title:"Gender"},{data:"status",title:"Status"},{data:"home_breed",title:"Home Breed?"},{data:"litter_id",title:"Litter ID"},{data:"created_at",title:"Created At"},{data:"notes",title:"Notes"}],drawCallback:function(a){}})}};r.render=c,r.__scopeId="data-v-e69c4136";const s=r}}]);
//# sourceMappingURL=692.js.map?id=3e37524c4cc44ce1f098