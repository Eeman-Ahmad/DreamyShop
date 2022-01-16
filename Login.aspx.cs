using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Automated_Product_price_comparison
{
    public partial class Login : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            this.UnobtrusiveValidationMode = UnobtrusiveValidationMode.None;
        }

        protected void btn_login_Click(object sender, EventArgs e)
        {
            using (price_comparison_DBEntities db = new price_comparison_DBEntities())
            {
                var lgn = db.LoginDB(txt_mail.Text, pwd.Text).ToList();
                if (lgn.Count > 0)
                {
                    Response.Redirect("Home.aspx");
                }
            }
        }
    }
}