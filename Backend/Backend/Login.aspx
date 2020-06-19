<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="Login.aspx.cs" Inherits="_Default" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <link href="styles/LoginSheet.css" rel="stylesheet" />
</asp:Content>

<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div>
        <form method="POST" action="">
            <asp:TextBox ID="tbUsername" runat="server" placeholder="Username"></asp:TextBox><br />
            <asp:TextBox ID="tbPassword" runat="server" placeholder="Password" type="password"></asp:TextBox><br />
            <asp:Button ID="btnLogin" runat="server" Text="Login" OnClick="btnLogin_Click" />
        </form>
        <asp:Label ID="lblError" runat="server"></asp:Label>
    </div>
</asp:Content>

