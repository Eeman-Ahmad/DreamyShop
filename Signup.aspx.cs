using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Automated_Product_price_comparison
{
    public partial class Signup : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            this.UnobtrusiveValidationMode = UnobtrusiveValidationMode.None;
        }

        protected void btn_create_Click(object sender, EventArgs e)
        {
            using (price_comparison_DBEntities db = new price_comparison_DBEntities())
            {
                customer_table ct = new customer_table();
                ct.Fname = txt_fname.Text;
                ct.Lname = txt_lname.Text;
                ct.Email = txt_email.Text;
                ct.Password = pwd.Text;
                ct.Status = true;
                db.customer_table.Add(ct);
                db.SaveChanges();
            }
        }

        protected void btn_login_Click(object sender, EventArgs e)
        {
            Response.Redirect("Home.aspx");
        }
    }
}