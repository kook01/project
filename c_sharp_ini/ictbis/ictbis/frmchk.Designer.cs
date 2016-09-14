namespace ictbis2
{
    partial class frmchk
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.txtboxsn = new System.Windows.Forms.TextBox();
            this.btnchk = new System.Windows.Forms.Button();
            this.btnreadtxtfile = new System.Windows.Forms.Button();
            this.btdt = new System.Windows.Forms.Button();
            this.txtboxshiftl = new System.Windows.Forms.TextBox();
            this.txtboxshiftr = new System.Windows.Forms.TextBox();
            this.txtboxreal = new System.Windows.Forms.TextBox();
            this.txtboxconv = new System.Windows.Forms.TextBox();
            this.btnshl = new System.Windows.Forms.Button();
            this.btnshr = new System.Windows.Forms.Button();
            this.btnEncrp = new System.Windows.Forms.Button();
            this.btndecrpt = new System.Windows.Forms.Button();
            this.textBox1 = new System.Windows.Forms.TextBox();
            this.button1 = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(50, 13);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(28, 13);
            this.label1.TabIndex = 0;
            this.label1.Text = "SN: ";
            // 
            // txtboxsn
            // 
            this.txtboxsn.Location = new System.Drawing.Point(85, 13);
            this.txtboxsn.Name = "txtboxsn";
            this.txtboxsn.Size = new System.Drawing.Size(300, 20);
            this.txtboxsn.TabIndex = 1;
            // 
            // btnchk
            // 
            this.btnchk.Location = new System.Drawing.Point(406, 8);
            this.btnchk.Name = "btnchk";
            this.btnchk.Size = new System.Drawing.Size(92, 23);
            this.btnchk.TabIndex = 2;
            this.btnchk.Text = "Check";
            this.btnchk.UseVisualStyleBackColor = true;
            this.btnchk.Click += new System.EventHandler(this.btnchk_Click);
            // 
            // btnreadtxtfile
            // 
            this.btnreadtxtfile.Location = new System.Drawing.Point(504, 8);
            this.btnreadtxtfile.Name = "btnreadtxtfile";
            this.btnreadtxtfile.Size = new System.Drawing.Size(75, 23);
            this.btnreadtxtfile.TabIndex = 3;
            this.btnreadtxtfile.Text = "Read Text File";
            this.btnreadtxtfile.UseVisualStyleBackColor = true;
            this.btnreadtxtfile.Click += new System.EventHandler(this.btnreadtxtfile_Click);
            // 
            // btdt
            // 
            this.btdt.Location = new System.Drawing.Point(406, 38);
            this.btdt.Name = "btdt";
            this.btdt.Size = new System.Drawing.Size(92, 23);
            this.btdt.TabIndex = 4;
            this.btdt.Text = "DT";
            this.btdt.UseVisualStyleBackColor = true;
            this.btdt.Click += new System.EventHandler(this.btdt_Click);
            // 
            // txtboxshiftl
            // 
            this.txtboxshiftl.Location = new System.Drawing.Point(94, 121);
            this.txtboxshiftl.Name = "txtboxshiftl";
            this.txtboxshiftl.Size = new System.Drawing.Size(100, 20);
            this.txtboxshiftl.TabIndex = 5;
            // 
            // txtboxshiftr
            // 
            this.txtboxshiftr.Location = new System.Drawing.Point(94, 147);
            this.txtboxshiftr.Name = "txtboxshiftr";
            this.txtboxshiftr.Size = new System.Drawing.Size(100, 20);
            this.txtboxshiftr.TabIndex = 6;
            // 
            // txtboxreal
            // 
            this.txtboxreal.Location = new System.Drawing.Point(94, 95);
            this.txtboxreal.Name = "txtboxreal";
            this.txtboxreal.Size = new System.Drawing.Size(100, 20);
            this.txtboxreal.TabIndex = 7;
            this.txtboxreal.Text = "E";
            this.txtboxreal.TextAlign = System.Windows.Forms.HorizontalAlignment.Center;
            // 
            // txtboxconv
            // 
            this.txtboxconv.Location = new System.Drawing.Point(206, 95);
            this.txtboxconv.Name = "txtboxconv";
            this.txtboxconv.Size = new System.Drawing.Size(100, 20);
            this.txtboxconv.TabIndex = 8;
            // 
            // btnshl
            // 
            this.btnshl.Location = new System.Drawing.Point(231, 117);
            this.btnshl.Name = "btnshl";
            this.btnshl.Size = new System.Drawing.Size(75, 23);
            this.btnshl.TabIndex = 9;
            this.btnshl.Text = "Shift Left";
            this.btnshl.UseVisualStyleBackColor = true;
            this.btnshl.Click += new System.EventHandler(this.btnshl_Click);
            // 
            // btnshr
            // 
            this.btnshr.Location = new System.Drawing.Point(231, 143);
            this.btnshr.Name = "btnshr";
            this.btnshr.Size = new System.Drawing.Size(75, 23);
            this.btnshr.TabIndex = 10;
            this.btnshr.Text = "Shift Right";
            this.btnshr.UseVisualStyleBackColor = true;
            this.btnshr.Click += new System.EventHandler(this.btnshr_Click);
            // 
            // btnEncrp
            // 
            this.btnEncrp.Location = new System.Drawing.Point(518, 37);
            this.btnEncrp.Name = "btnEncrp";
            this.btnEncrp.Size = new System.Drawing.Size(75, 23);
            this.btnEncrp.TabIndex = 11;
            this.btnEncrp.Text = "Encrp";
            this.btnEncrp.UseVisualStyleBackColor = true;
            this.btnEncrp.Click += new System.EventHandler(this.btnEncrp_Click);
            // 
            // btndecrpt
            // 
            this.btndecrpt.Location = new System.Drawing.Point(612, 36);
            this.btndecrpt.Name = "btndecrpt";
            this.btndecrpt.Size = new System.Drawing.Size(75, 23);
            this.btndecrpt.TabIndex = 12;
            this.btndecrpt.Text = "Decrpt";
            this.btndecrpt.UseVisualStyleBackColor = true;
            this.btndecrpt.Click += new System.EventHandler(this.btndecrpt_Click);
            // 
            // textBox1
            // 
            this.textBox1.Location = new System.Drawing.Point(612, 12);
            this.textBox1.Name = "textBox1";
            this.textBox1.Size = new System.Drawing.Size(100, 20);
            this.textBox1.TabIndex = 13;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(406, 77);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(75, 23);
            this.button1.TabIndex = 14;
            this.button1.Text = "button1";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // frmchk
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(784, 285);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.textBox1);
            this.Controls.Add(this.btndecrpt);
            this.Controls.Add(this.btnEncrp);
            this.Controls.Add(this.btnshr);
            this.Controls.Add(this.btnshl);
            this.Controls.Add(this.txtboxconv);
            this.Controls.Add(this.txtboxreal);
            this.Controls.Add(this.txtboxshiftr);
            this.Controls.Add(this.txtboxshiftl);
            this.Controls.Add(this.btdt);
            this.Controls.Add(this.btnreadtxtfile);
            this.Controls.Add(this.btnchk);
            this.Controls.Add(this.txtboxsn);
            this.Controls.Add(this.label1);
            this.Name = "frmchk";
            this.Text = "Check Serial Number";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtboxsn;
        private System.Windows.Forms.Button btnchk;
        private System.Windows.Forms.Button btnreadtxtfile;
        private System.Windows.Forms.Button btdt;
        private System.Windows.Forms.TextBox txtboxshiftl;
        private System.Windows.Forms.TextBox txtboxshiftr;
        private System.Windows.Forms.TextBox txtboxreal;
        private System.Windows.Forms.TextBox txtboxconv;
        private System.Windows.Forms.Button btnshl;
        private System.Windows.Forms.Button btnshr;
        private System.Windows.Forms.Button btnEncrp;
        private System.Windows.Forms.Button btndecrpt;
        private System.Windows.Forms.TextBox textBox1;
        private System.Windows.Forms.Button button1;
    }
}

