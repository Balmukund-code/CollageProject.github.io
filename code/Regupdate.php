<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update Page</title>
    </head>
    <body>
        <% 
            DBManager1 db=new DBManager1();
        String ad=request.getParameter("aid");        
        String na=request.getParameter("name");
        String ge=request.getParameter("gen");
        String ct=request.getParameter("city");
        String br=request.getParameter("date");
        String em=request.getParameter("email");
        String mo=request.getParameter("mobile");
        String da=request.getParameter("date");
        String pin=request.getParameter("pincode");
        String add=request.getParameter("address");
//        out.println(ad+" "+na+" "+ge+" "+ct+" "+em+" "+mo+" "+da+" "+pin+" "+add+"");
        String cmd="UPDATE registration SET name='"+na+"', gender='"+ge+"', email='"+em+"', mobile='"+mo+"', city='"+ct+"',birth='"+br+"', pincode='"+pin+"', address='"+add+"' WHERE id='"+ad+"'";
        boolean res=db.ExecuteInsertUpdateDelete(cmd);
        if(res)
        {
            out.print("<script>alert('Update successful');window.location.href='../AdminZone/registrationmgmt.php';</script>");
        }
        else{
            out.print("<script>alert('Update successful');window.location.href='../Adminone/Regupdate.php';</script>");
        }

        %>
    </body>
</html>
