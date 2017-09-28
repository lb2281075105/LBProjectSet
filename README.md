# LBProjectSet
把一些比较好的项目以及逻辑点收集在本仓库下

### 支付宝生活圈
    * 支付宝页面布局完美实现(不要复杂的MVVM设计模式就能实现复杂页面布局问题)

### 爱博客

### 彩票

    * 封装彩票'我的'模块，设计思想：
      1. 把每组视为一个模型，每组定义组头视图文本、组尾视图文本以及每组中cell的个数；
      2. 把每个cell视为一个模型，每个cell中定义icon、title、subTitle以及cell的辅助视图；
      3. 封装主要的tableViewController，封装完毕后就能在控制器里面用最少的代码实现多次跳转的表视图各种样式；


### iOS 11适配

     * 导航栏按钮位置适配：添加一个UIView给导航按钮，在UIView上面再添加一个自定义UIButton就可以适配。
     
     
     * UITableView和UIScrollView的适配
     表视图：if (@available(iOS 11.0, *)) {
     _outOfRuTableView.contentInsetAdjustmentBehavior = UIScrollViewContentInsetAdjustmentNever;
     _outOfRuTableView.contentInset = UIEdgeInsetsMake(64, 0, 0, 0);
     _outOfRuTableView.scrollIndicatorInsets = _outOfRuTableView.contentInset;
     }
     
     *单元格错位：
     _tableView.estimatedRowHeight=0;
     _tableView.estimatedSectionHeaderHeight=0;
     _tableView.estimatedSectionFooterHeight=0;
