Module ModuleTampil
    Sub Main()
        Dim p As rest = New rest("http://localhost/mvc")
        p.List("application/json")

    End Sub

End Module
