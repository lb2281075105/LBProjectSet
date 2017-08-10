//
//  LBZFBTableView.m
//  LBZhiFuBao
//
//  Created by 刘博 on 2017/8/11.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBZFBTableView.h"
#import "LBZFBTableCell.h"
@implementation LBZFBTableView

- (instancetype)initWithFrame:(CGRect)frame style:(UITableViewStyle)style{
    self = [super initWithFrame:frame style:style];
    if (self) {
        self.delegate = self;
        self.dataSource = self;
        /// 注册cell
        /// [self registerClass:[LBZFBTableCell class] forCellReuseIdentifier:@"LBZFBTableCell"]
    }
    return self;
}

- (void)setDataArray:(NSMutableArray *)dataArray{
    _dataArray = dataArray;
    /// 刷新表
    [self reloadData];
}

- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{

    return _dataArray.count;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    /// cell 重用
    LBZFBTableCell *cell = [LBZFBTableCell cellWithTableView:tableView];
    
    return cell;
}
@end
