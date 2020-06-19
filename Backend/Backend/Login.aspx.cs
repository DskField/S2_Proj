using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;
using System.Web.Security;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
    }

    protected void btnLogin_Click(object sender, EventArgs e)
    {
        // Input ophalen van de gebruiker
        string usernameInput = tbUsername.Text;
        string passwordInput = tbPassword.Text;

        // Connectiestring
        string dbConnection = ConfigurationManager.ConnectionStrings["eventSiteConnectionString"].ConnectionString;

        // Connectieobject aanmaken voor SQL connectie
        SqlConnection conn = new SqlConnection(dbConnection);

        // SQL commando object aanmaken
        SqlCommand getPassword = new SqlCommand($"SELECT ebPass FROM Account WHERE ebUser = '{usernameInput}';", conn);

        string correctPassword = null;

        try
        {
            // Verbinding starten
            conn.Open();
            correctPassword = Convert.ToString(getPassword.ExecuteScalar());
            conn.Close();
        }
        catch
        {
            lblError.Text = "Er is iets mis gegaan!";
            return;
        }

        // Wachtwoord controleren met database
        if (passwordInput == correctPassword)
        {
            Response.Redirect("Evenement.aspx");

        }
        else
        {
            lblError.Text = "Gebruikersnaam of wachtwoord onjuist.";
        }
    }
}