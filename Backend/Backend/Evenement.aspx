<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="Evenement.aspx.cs" Inherits="_Default" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <link href="styles/EvenementSheet.css" rel="stylesheet" />
</asp:Content>

<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:DropDownList ID="ddlEvenement" runat="server" DataSourceID="SqlDataSource1" DataTextField="eventName" DataValueField="eventName" AutoPostBack="True"></asp:DropDownList>
    <asp:SqlDataSource runat="server" ID="SqlDataSource1" ConnectionString='<%$ ConnectionStrings:eventSiteConnectionString %>' SelectCommand="SELECT [eventName] FROM [Evenement]"></asp:SqlDataSource>
    <asp:GridView ID="gvEvenementInfo" runat="server" AutoGenerateColumns="False" DataKeyNames="eventID,optredenID" DataSourceID="SqlDataSource2">
        <Columns>
            <asp:BoundField DataField="eventID" HeaderText="eventID" ReadOnly="True" InsertVisible="False" SortExpression="eventID"></asp:BoundField>
            <asp:BoundField DataField="eventName" HeaderText="eventName" SortExpression="eventName"></asp:BoundField>
            <asp:BoundField DataField="optredenID" HeaderText="optredenID" ReadOnly="True" InsertVisible="False" SortExpression="optredenID"></asp:BoundField>
            <asp:BoundField DataField="artiest" HeaderText="artiest" SortExpression="artiest"></asp:BoundField>
        </Columns>
    </asp:GridView>
    <asp:SqlDataSource runat="server" ID="SqlDataSource2" ConnectionString='<%$ ConnectionStrings:eventSiteConnectionString %>' SelectCommand="SELECT Evenement.eventID, Evenement.eventName, Optreden.optredenID, Optreden.artiest FROM Evenement INNER JOIN Optreden ON Evenement.eventOpt = Optreden.optredenID WHERE ([eventName] = @eventName)">
        <SelectParameters>
            <asp:ControlParameter ControlID="ddlEvenement" PropertyName="SelectedValue" Name="eventName"></asp:ControlParameter>
        </SelectParameters>
    </asp:SqlDataSource>
</asp:Content>

