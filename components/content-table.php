
<script>
    $(function(){
        //가상의 local json data
        var gridData = [{seq:"1",create_date:"2007-10-01",create_name:"test",title:"note",hitnum:"11"},
                      {seq:"2",create_date:"2007-10-02",create_name:"test2",title:"note2",hitnum:"22"},
                      {seq:"3",create_date:"2007-10-03",create_name:"test3",title:"note3",hitnum:"23"},
                      {seq:"4",create_date:"2007-10-04",create_name:"test4",title:"note4",hitnum:"24"},
                      {seq:"5",create_date:"2007-10-05",create_name:"test5",title:"note5",hitnum:"25"},
                      {seq:"6",create_date:"2007-10-06",create_name:"test6",title:"note6",hitnum:"26"},
                      {seq:"7",create_date:"2007-10-07",create_name:"test7",title:"note7",hitnum:"27"},
                      {seq:"8",create_date:"2007-10-08",create_name:"test8",title:"note8",hitnum:"28"},
                      {seq:"9",create_date:"2007-10-09",create_name:"test9",title:"note9",hitnum:"29"},
                      {seq:"10",create_date:"2007-10-10",create_name:"test10",title:"note10",hitnum:"10"},
                      {seq:"11",create_date:"2007-10-11",create_name:"test11",title:"note11",hitnum:"11"},
                      {seq:"12",create_date:"2007-10-12",create_name:"test12",title:"note12",hitnum:"12"},
                      {seq:"13",create_date:"2007-10-13",create_name:"test13",title:"note13",hitnum:"13"},
                      {seq:"14",create_date:"2007-10-14",create_name:"test14",title:"note14",hitnum:"14"},
                      {seq:"15",create_date:"2007-10-15",create_name:"test15",title:"note15",hitnum:"15"},
                      {seq:"16",create_date:"2007-10-16",create_name:"test16",title:"note16",hitnum:"16"},
                      {seq:"17",create_date:"2007-10-17",create_name:"test17",title:"note17",hitnum:"17"},
                      {seq:"18",create_date:"2007-10-18",create_name:"test18",title:"note18",hitnum:"18"},
                      {seq:"19",create_date:"2007-10-19",create_name:"test19",title:"note19",hitnum:"19"}];
         
        //jqGrid껍데기 생성
        $(".list").jqGrid({
            //로컬그리드이용
            datatype: "local",
            //그리드 높이
            height: 550,            
            //컬럼명들
            colNames:['시퀀스','제목', '등록일', '등록자명','조회수'],
            //컬럼모델
            colModel:[
                {name:'seq'},
                {name:'title'},
                {name:'create_date'},
                {name:'create_name'},
                {name:'hitnum'}    
            ],
            //그리드타이틀
            caption: "그리드 목록",
            autowidth: true// 브라우저 너비에 맞게 자동 조정
        });         
         
        // 스크립트 변수에 담겨있는 json데이터의 길이만큼
        for(var i=0;i<=gridData.length;i++){
                //jqgrid의 addRowData를 이용하여 각각의 row에 gridData변수의 데이터를 add한다
                $(".list").jqGrid('addRowData',i+1,gridData[i]);
        }
        $(".list").jqGrid("setGridWidth", $("#grid-container").width());
         // 브라우저 리사이즈 시 자동으로 width 조정
        $(window).on("resize", function () {            
            var newWidth = $("#grid-container").width();        
            $(".list").jqGrid("setGridWidth", newWidth);
        });
});
</script>

<div id="grid-container" class="table_wrapper jqgrid">
    <table class="list"></table>
</div>
